<?
$block_set_borderColor=array("888","000","888",null,null,null,null,null,null,null,"f88","f00","f00","f00","f00","f00","f00","f00",null,"f00","fff","bb0","bb0","bb0","bb0","bb0",null,null,null,"bb0","88f","44f","44f","44f",null,null,null,null,null,"44f");
$block_set_bgColor=array("000000","000000","000000",null,null,null,null,null,null,null,"000000","000000","220000","440000","660000","880000","aa0000","cc0000",null,"cc0000","000000","000000","333300","666600","999900","cccc00",null,null,null,"cccc00","000000","000000","000044","000088",null,null,null,null,null,"000088");
$block_set_bgImg=array("blk","blk","blk","blk","blk","blk","blk","blk","blk","blk","blk","r1","r2","r3","r4","r5","r6","r7",null,"r7","blk","y1","y2","y3","y4","y5",null,null,null,"y5","blk","b1","b2","b3",null,null,null,null,null,"b3");
$block_set_value=array("0","1","2",null,null,null,null,null,null,null,"10","11","12","13","14","15","16","19",null,"19","20","21","22","23","24","29",null,null,null,"29","30","31","32","39",null,null,null,null,null,"39");
?>
<table class="hidden">
    <?
for($row = 0; $row < 4; $row++)
{
    ?>
    <tr>
        <?
for($col = 0; $col < 10; $col++)
{
if(!is_null($block_set_value[$row*10 + $col]))
{
        ?>
        <td id="block_set" align="center"
        style="width:50px;height:50px;
        border:2px solid #<?= $block_set_borderColor[$row*10+$col];?>;
        background-color:#<?= $block_set_bgColor[$row*10+$col];?>;
        background-image:url('<?= $path.$block_set_bgImg[$row*10+$col];?>.png');
        background-repeat:no-repeat;background-position:center center;"><?= $block_set_value[$row*10+$col];?></td>
        <?
}
else
{
        ?>
        <td id="block_set"></td>
        <?
}
}
        ?>
    </tr>
    <? }?>
</table>
<? // block_up 테이블 만들기 /////////////////////////////////////////////////////?>
<table class="hidden">
    <?
for($row = 0; $row < 4; $row++)
{
    ?>
    <tr>
        <?
for($col = 0; $col < 10; $col++)
{
if($col == 5)
{
        ?>
    </tr>
    <tr>
        <?
}
if($row != 0 && $col != 0 && !is_null($block_set_value[$row*10 + $col]))
{
        ?>
        <td id="block_up" style="border:1px solid #fff">
        <table>
            <tr>
                <td valign="middle"><img src="<?= $path.$block_set_bgImg[$row*10+$col];?>.png"><?
if(!is_null($block_set_value[$row * 10 + $col + 1]) && $col != 9)
{
for($i = 0; $i < 2; $i++)
{
                ?><img src="<?= $path.$block_set_bgImg[$row*10+$col];?>.png"><?
}
}
                ?></td>
                <td valign="middle"><img src="<?= $path;?>arrow_right.png"></td>
                <td valign="middle"><?
if(!is_null($block_set_value[$row * 10 + $col + 1]) && $col != 9)
{
                ?><img src="<?= $path.$block_set_bgImg[$row*10+$col+1];?>.png"><?
}
else
{
                ?>
                ★<?
}
                ?></td>
            </tr>
        </table><?
}
else
{
        ?><td id="block_up"></td>
        <?
}
}
        ?>
    </tr>
    <?
}
    ?>
</table>
<table class="hidden">
    <tr>
        <td id="temp"></td>
    </tr>
</table>