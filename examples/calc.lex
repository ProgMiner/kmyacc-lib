<?php

// vim: noexpandtab
%%

%line
%char

DIGIT=[0-9]
NUMBER=({DIGIT})+
WHITE_SPACE=([\ \n\r\t\f])+

%%

<YYINITIAL>	\n	{ return $this->createToken(); }

<YYINITIAL>	"//".*			{}
<YYINITIAL>	{WHITE_SPACE}	{}

<YYINITIAL>	{NUMBER}	{ return $this->createToken(calc::NUMBER); }
<YYINITIAL>	. 			{ return $this->createToken(); }
