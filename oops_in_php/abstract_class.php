<?php 
// abstract class are templates that tells us inside child class
// which method is manadatory to made . in abstract class we declare 
// methods but write its implementaion in child class.
abstract class ProductFeatures{
    public $country="Japan";
    abstract function productDetails();
    abstract function productImages();
    abstract function productOwnerDetails();
    function common(){
        echo "comon things in products";
    }
}
class UploadProduct extends ProductFeatures{
    function productDetails(){
        echo "Product detils";
    }
    function productImages(){
        echo "Product images ";
    }
    function productOwnerDetails(){
        echo "Product owner detils";
    }
    function other(){
        echo "product others details ";
    }
    
}
// $productFeature=new ProductFeatures();// we can not make abstract class object
$upload=new Uploadproduct();
$upload->productDetails();
echo "<br>";
$upload->productImages();
echo "<br>";
$upload->productOwnerDetails();
echo "<br>";
$upload->common();
echo "<br>";
$upload->other();
echo "<br>";
echo $upload->country;
echo "<br>";
?>