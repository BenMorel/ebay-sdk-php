<?php
/**
 * Copyright (c) 2014 Michael Dowling, https://github.com/mtdowling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace DTS\eBaySDK\JmesPath;

/**
 * Compiles JMESPath expressions to PHP source code and executes it.
 *
 * JMESPath file names are stored in the cache directory using the following
 * logic to determine the filename:
 *
 * 1. Start with the string "jmespath_"
 * 2. Append the MD5 checksum of the expression.
 * 3. Append ".php"
 */
class CompilerRuntime
{
    private $parser;
    private $compiler;
    private $cacheDir;
    private $interpreter;

    /**
     * @param string $dir Directory used to store compiled PHP files.
     * @param Parser $parser JMESPath parser to utilize
     * @throws \RuntimeException if the cache directory cannot be created
     */
    public function __construct($dir = null, ?Parser $parser = null)
    {
        $this->parser = $parser ?: new Parser();
        $this->compiler = new TreeCompiler();
        $dir = $dir ?: sys_get_temp_dir();

        if (!is_dir($dir) && !mkdir($dir, 0755, true)) {
            throw new \RuntimeException("Unable to create cache directory: $dir");
        }

        $this->cacheDir = realpath($dir);
        $this->interpreter = new TreeInterpreter();
    }

    /**
     * Returns data from the provided input that matches a given JMESPath
     * expression.
     *
     * @param string $expression JMESPath expression to evaluate
     * @param mixed  $data       Data to search. This data should be data that
     *                           is similar to data returned from json_decode
     *                           using associative arrays rather than objects.
     *
     * @return mixed|null Returns the matching data or null
     * @throws \RuntimeException
     */
    public function __invoke($expression, $data)
    {
        $functionName = 'jmespath_' . md5($expression);

        if (!function_exists($functionName)) {
            $filename = "{$this->cacheDir}/{$functionName}.php";
            if (!file_exists($filename)) {
                $this->compile($filename, $expression, $functionName);
            }
            require $filename;
        }

        return $functionName($this->interpreter, $data);
    }

    private function compile($filename, $expression, $functionName)
    {
        $code = $this->compiler->visit(
            $this->parser->parse($expression),
            $functionName,
            $expression
        );

        if (!file_put_contents($filename, $code)) {
            throw new \RuntimeException(sprintf(
                'Unable to write the compiled PHP code to: %s (%s)',
                $filename,
                var_export(error_get_last(), true)
            ));
        }
    }
}
