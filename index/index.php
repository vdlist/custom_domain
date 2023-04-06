<?php  
$jsonArray=array();
class AdsData implements  JsonSerializable
{
    private $status,$native,$ini,$banner,$fk,$main;
    public function __construct($status,$banner,$native,$ini,$fk,$main){
          $this->native = $native;
           $this->ini = $ini;
           $this->banner = $banner;
              $this->fk= $fk;
             //    $this->change = $change;
                    $this->main= $main;
                       $this->status = $status;
    
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}/*
$native_ads=array("/22405025169,22841403445/com.mgmg.ds.Native1","/22405025169,22841403445/com.mgmg.ds.Native2","/22405025169,22841403445/com.mgmg.ds.Native3","/22405025169,22841403445/com.mgmg.ds.Native4","/22405025169,22841403445/com.mgmg.ds.Native5");
$ini_ads=array("/22405025169,22841403445/com.mgmg.ds.Interstitial6","/22405025169,22841403445/com.mgmg.ds.Interstitial2","/22405025169,22841403445/com.mgmg.ds.Interstitial3","/22405025169,22841403445/com.mgmg.ds.Interstitial4","/22405025169,22841403445/com.mgmg.ds.Interstitial5");
$open_ads=array("/22405025169,22841403445/com.mgmg.ds.AppOpen1","/22405025169,22841403445/com.mgmg.ds.AppOpen2","/22405025169,22841403445/com.mgmg.ds.AppOpen3","/22405025169,22841403445/com.mgmg.ds.AppOpen4","/22405025169,22841403445/com.mgmg.ds.AppOpen5");
*/
$native_ads=array("/22405025169,22841403445/com.mgmg.ds.Native","/22405025169,22841403445/com.mgmg.ds.Native1","/22405025169,22841403445/com.mgmg.ds.Native2","/22405025169,22841403445/com.mgmg.ds.Native3","/22405025169,22841403445/com.mgmg.ds.Native4","/22405025169,22841403445/com.mgmg.ds.Native5");
$ini_ads=array("/22405025169,22841403445/com.mgmg.ds.Interstitial7","/22405025169,22841403445/com.mgmg.ds.Interstitial1","/22405025169,22841403445/com.mgmg.ds.Interstitial2","/22405025169,22841403445/com.mgmg.ds.Interstitial3","/22405025169,22841403445/com.mgmg.ds.Interstitial4","/22405025169,22841403445/com.mgmg.ds.Interstitial5","/22405025169,22841403445/com.mgmg.ds.Interstitial6");
$open_ads=array("/22405025169,22841403445/com.mgmg.ds.AppOpen6","/22405025169,22841403445/com.mgmg.ds.AppOpen2","/22405025169,22841403445/com.mgmg.ds.AppOpen3","/22405025169,22841403445/com.mgmg.ds.AppOpen4","/22405025169,22841403445/com.mgmg.ds.AppOpen5","/22405025169,22841403445/com.mgmg.ds.AppOpen1");
//shuffle($native_ads);
//shuffle($ini_ads);
//shuffle($open_ads);
//echo $a[0];
$status="true";
$fk="https://vdlistinmm.xyz/ktservices/blogger/f.json";
$main="https://vdlistinmm.xyz/2021yp/moemaylin/";
  //$change="new";

//$AdsData = new AdsData($status,"/22405025169,22841403445/com.mgmg.ds.Banner",$open_ads[0],$ini_ads[0],$fk,$main);
//banner,openads,ini
$AdsData = new AdsData($status,"1354819328647452_1354820871980631","","1354819328647452_1354820935313958",$fk,$main);
    array_push($jsonArray, $AdsData);

header("Content-Type: application/json");
echo str_replace( array('[',']') , ''  , json_encode($jsonArray, JSON_PRETTY_PRINT));

//echo json_encode($jsonArray, JSON_PRETTY_PRINT);


?>

