<?php

// vim: syntax=php

/* MIT License

Copyright (c) 2018 Eridan Domoratskiy

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. */

require_once 'calc.lex.php';

/**
 * This is an automatically GENERATED file, which should not be manually edited.
 *
 * Based on prototype file of PHP parser
 * written by Masato Bito
 *
 * @author Eridan Domoratskiy
 * @author Masato Bito
 */
class calc extends \Kmyacc\AbstractParser {

    const YYBADCH = 10;
    const YYMAXLEX = 258;
    const YYTERMS = 10;
    const YYNONTERMS = 5;

    const YYLAST = 15;

    const YY2TBLSTATE = 4;

    const YYGLAST = 6;

    const YYSTATES = 20;
    const YYNLSTATES = 12;
    const YYINTERRTOK = 1;
    const YYUNEXPECTED = 32767;
    const YYDEFAULT = -32766;
    const YYERRTOK = 256;
    const NUMBER = 257;

    protected $yytranslate = [
            0,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
            8,    9,    5,    3,   10,    4,   10,    6,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,    7,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,   10,   10,   10,   10,
           10,   10,   10,   10,   10,   10,    1,    2
    ];

    protected $yyaction = [
            5,    6,   -4,   18,    5,    6,   23,   24,   17,   -1,
           18,    7,    8,    4,    0
    ];

    protected $yycheck = [
            3,    4,    0,    1,    3,    4,    9,    2,    7,    0,
            1,    5,    6,    8,    0
    ];

    protected $yybase = [
            2,    1,   -3,    9,    5,    5,    5,    5,    5,    6,
            6,   14,    5,    6,    6,    5
    ];

    protected $yydefault = [
        32767,32767,32767,32767,32767,32767,32767,32767,32767,    7,
            8,32767
    ];

    protected $yygoto = [
            2,    9,   10,   21,   22,   15
    ];

    protected $yygcheck = [
            4,    4,    4,    4,    4,    3
    ];

    protected $yygbase = [
            0,    0,    0,    2,   -4
    ];

    protected $yygdefault = [
        -32768,   11,    3,   14,    1
    ];

    protected $yylhs = [
            0,    1,    2,    2,    3,    3,    3,    4,    4,    4,
            4,    4,    4
    ];

    protected $yylen = [
            1,    1,    1,    2,    0,    2,    1,    3,    3,    3,
            3,    3,    1
    ];

    public function __construct(\JLexPHP\AbstractLexer $lexer) {
        parent::__construct($lexer);
    }

    protected function initReduceCallbacks() {
        $this->reduceCallbacks = [
            0 => function ($yysp) {
                $this->yyval = $this->yyastk[$yysp] ?? '';
            },
            1 => function ($yysp) {
                $this->yyval = $this->yyastk[$yysp] ?? '';
            },
            2 => function ($yysp) {
                $this->yyval = $this->yyastk[$yysp] ?? '';
            },
            3 => function ($yysp) {
                $this->yyval = $this->yyastk[$yysp] ?? '';
            },
            4 => function ($yysp) {
                 echo "(empty line ignored)\n"; 
            },
            5 => function ($yysp) {
                 echo $this->yyastk[$yysp - (2 - 1)]."\n"; 
            },
            6 => function ($yysp) {
                $this->yyval = $this->yyastk[$yysp] ?? '';
            },
            7 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (3 - 1)] + $this->yyastk[$yysp - (3 - 3)]; 
            },
            8 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (3 - 1)] - $this->yyastk[$yysp - (3 - 3)]; 
            },
            9 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (3 - 1)] * $this->yyastk[$yysp - (3 - 3)]; 
            },
            10 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (3 - 1)] / $this->yyastk[$yysp - (3 - 3)]; 
            },
            11 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (3 - 2)]; 
            },
            12 => function ($yysp) {
                 $this->yyval = $this->yyastk[$yysp - (1 - 1)]; 
            },
        ];
    }
}
