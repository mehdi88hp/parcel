
$heading="packaging";

sub home{

if( $noimg )
	{
print qq|
<html>
<head></head>
<body>
<div>
|;	
	}
else
	{
	&myheader($heading);

	&topmenu($heading);
	
print qq|

<div class="ha2">
|;	
	}

print qq|

<h1><font color="#000080" size="3">Packaging Advice</font></h1>
<font size="2" face="Arial" color="#000000">
<b><big><u>The Do's</u></big></b>
<br>

<ul>
<li>Boxes should be durable and double-walled. Remember that items will get stacked in transit, therefore your packaging may need to support the weight of other packages. </li>
<li>Choose the size of the package according to its content. Under-filled boxes are likely to collapse; overloaded ones may burst. </li>
<li>Always use high quality materials for your shipments. Consider strength, cushioning, and durability when selecting your wrapping supplies. </li>
<li>Choose boxes made of corrugated cardboard, with good quality outer liners. Use heavy-duty double-layered board for fragile items. </li>
<li>Make use of cushioning materials, especially to stop your packaging contents from moving. </li>
<li>Use strapping or strong tape to seal and secure your box. </li>
<li>Put fragile goods in the centre of a package; ensuring they don't touch the sides. Your item should be well cushioned on all sides. </li>
<li>Seal greasy or strong-smelling substances with adhesive tape, then wrap in grease resistant paper. Always remember that bad packaging may cause damage to surrounding items. </li>
<li>Place powders and fine grains in strong plastic bags, securely sealed and then packed in a rigid fibreboard box. </li>
<li>Use "arrow-up" label for non-solid materials. </li>
<li>Repack your gifts properly. Many goods sold in attractive packaging will not be suitable for shipping. </li>
<li>Use triangular tubes not round tube-type cylinders to pack rolled plans, maps and blueprints. </li>
<li>Remember always to pack small items and flyers appropriately. </li>
<li>Protect your data discs, audio and video-tapes with soft cushioning material around each item. </li>
<li>Complete the address clearly and completely, using uppercase letters when handwriting labels to improve readability for courier personnel. </li>
<li>When shipping items that have sharp edges and points, ensure these are adequately protected. Heavy cardboard is suitable for this. Fix the protective material securely so that it cannot be accidentally removed in transit. </li>
<li>Always use cardboard dividers when sending flat, fragile material (such as vinyl records). </li>
<li>When re-using a box, remove all labels and stickers. Ensure that the box is in good shape and not worn out. </li>
</ul>

<b><big><u>The Do Nots</u></big></b>

<ul>
<li>Do not use bags made of fabric or cloth. </li>
<li>Do not over seal your package. Remember that all shipments can be opened by customs authorities for inspection. </li>
<li>Do not use cellophane tape or rope to seal your shipment. </li>
<li>Do not consider "Fragile" and "Handle with care" labels as a substitute for careful packaging. They are only appropriate for information purposes. </li>
</ul>

<br>
</font>

</div><br />
</body>
</html>

|;

#&footer;

}

1;