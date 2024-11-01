<?php


function triangle($bottom,$height)
{
$acreageTriangle= $bottom*$height/2;
echo $acreageTriangle;
echo "<br />";
}

function quadrangle($bottom,$height)
{
$acreageQuadrangle= $bottom*$height;
echo $acreageQuadrangle;
echo "<br />";
}

function Ttrapezoid($bottom,$top,$height)
{
$acreageTtrapezoid= ($bottom+$top)*$height/2;
echo $acreageTtrapezoid;
echo "<br />";
}

triangle(5,10);
quadrangle(5,10);
Ttrapezoid(5,2,10);