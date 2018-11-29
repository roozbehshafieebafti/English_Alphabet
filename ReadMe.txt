$$$$$               $$$$$ $$$$$$$$$$ 
$$$$$               $$$$$ $$$$$$$$$$ 
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$$$$$$$$$$$$$$$$$$$$$   $$$$$$  
$$$$$$$$$$$$$$$$$$$$$$$$$   $$$$$$  
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$   $$$$$$     
$$$$$               $$$$$ $$$$$$$$$$ 
$$$$$               $$$$$ $$$$$$$$$$ 

this class is written for making beautiful Words and Sentences with " $ " sign.
for using this class, follow the Instruction:

1.include English_Alphabet.php file to your source code
2.Make an object from the class
3.call the proper function (Full_Make or Liner)

for example:

	include('English_Alphabet.php');
	$obj= new En_Al;

	// the Output is String
	print_r($obj->Full_Make('hi'));echo '<br>';

	// the Output is Array
	print_r($obj->Liner('hi'));echo '<br>';
