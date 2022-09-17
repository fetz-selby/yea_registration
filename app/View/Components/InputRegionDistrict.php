<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputRegionDistrict extends Component
{
    public $values;
    public $regionName;
    public $districtName;
    public $defaultRegion;
    public $defaultDistrict;
    public $regionInputWrapperClass;
    public $districtInputWrapperClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $regionName,
        string $districtName,
        string $regionInputWrapperClass,
        string $districtInputWrapperClass,
        string $defaultRegion = "",
        string $defaultDistrict = "",
    ) {

        $this->defaultRegion = $defaultRegion;
        $this->defaultDistrict = $defaultDistrict;
        $this->districtName = $districtName;
        $this->regionInputWrapperClass = $regionInputWrapperClass;
        $this->regionName = $regionName;
        $this->districtInputWrapperClass = $districtInputWrapperClass;

        $this->values = array(

            "Ahafo" => [
                "Asunafo North Municipal",
                "Asunafo South",
                "Asutifi North",
                "Asutifi South",
                "Tano North Municipal",
                "Tano South Municipal",
            ],

            "Ashanti" => [
                "Adansi Asokwa Adansi",
                "Adansi North",
                "Adansi South",
                "Afigya Kwabre South",
                "Afiga Kwabre North",
                "Ahafo Ano North Municipal",
                "Ahafo Ano South West",
                "Ahafo Ano South East",
                "Akrofuom",
                "Amansie Central",
                "Amansie South",
                "Amansie West",
                "Asante Akim Central Municipal",
                "Asante Akim North",
                "Asante Akim South",
                "Asokore Mampong Municipal",
                "Asokwa Municipal",
                "Atwima Kwanwoma",
                "Atwima Mponua",
                "Atwima Nwabiagya North",
                "Atwima Nwabiagya South",
                "Bekwai Municipal",
                "Bosome Freho",
                "Bosomtwe",
                "Ejisu Municipal",
                "Ejura-Sekyedumase",
                "Juaben Municipal",
                "Kumasi Metropolitan",
                "Kwadaso Municipal",
                "Kwabre East Municipal",
                "Mampong Municipal",
                "Obuasi East",
                "Obuasi Municipal",
                "Offinso North",
                "Offinso South Municipal",
                "Oforikrom Municipal",
                "Old Tafo Municipal",
                "Sekyere Afram Plains",
                "Sekyere Central",
                "Sekyere East",
                "Sekyere Kumawu",
                "Sekyere South",
                "Suame Municipal",
            ],

            "Bono" => [
                "Banda",
                "Berekum East Municipal",
                "Berekum West",
                "Dormaa Central Municipal",
                "Dormaa East",
                "Dormaa West",
                "Jaman North",
                "Jaman South Municipal",
                "Sunyani Municipal",
                "Sunyani West",
                "Tain",
                "Wenchi Municipal",
            ],

            "Bono East" => [
                "Atebubu-Amantin Municipal",
                "Kintampo North Municipal",
                "Kintampo South",
                "Nkoranza North",
                "Nkoranza South",
                "Pru West",
                "Pru East",
                "Sene East",
                "Sene West",
                "Techiman Municipal",
                "Techiman North",
            ],

            "Western North" => [
                "Aowin Municipal",
                "Bia East",
                "Bia West",
                "Bibiani-Anhwiaso-Bekwai",
                "Bodi",
                "Juaboso",
                "Sefwi Akontombra",
                "Sefwi Wiawso",
                "Suaman",
            ],

            "Western" => [
                "Ahanta West Municipal",
                "Effia Kwesimintsim Municipal",
                "Ellembele",
                "Jomoro Municipal",
                "Mpohor",
                "Nzema East Municipal",
                "Prestea-Huni Valley Municipal",
                "Sekondi Takoradi Metropolitan",
                "Shama",
                "Tarkwa Nsuaem Municipal",
                "Wassa Amenfi Central",
                "Wassa Amenfi East Municipal",
                "Wassa Amenfi West Municipal",
                "Wassa East",
            ],

            "Volta" => [
                "Adaklu",
                "Afadzato South",
                "Agotime Ziope",
                "Akatsi South",
                "Akatsi North",
                "Anloga",
                "Central Tongu",
                "Ho Municipal",
                "Ho West",
                "Hohoe Municipal",
                "Keta Municipal",
                "Ketu North Municipal",
                "Ketu South Municipal",
                "Kpando Municipal",
                "North Dayi",
                "North Tongu",
                "South Dayi",
                "South Tongu",
            ],

            "Upper West" => [
                "Daffiama Bussie Issa",
                "Jirapa Municipal",
                "Lambussie Karni",
                "Lawra Municipal",
                "Nadowli-Kaleo",
                "Nandom",
                "Sissala East Municipal",
                "Sissala West",
                "Wa East",
                "Wa Municipal",
                "Wa West",
            ],

            "Upper East" => [
                "Bawku Municipal",
                "Bawku West",
                "Binduri",
                "Bolgatanga East",
                "Bolgatanga Municipal",
                "Bongo",
                "Builsa North",
                "Builsa South",
                "Garu",
                "Kassena Nankana East",
                "Kassena Nankana West",
                "Nabdam",
                "Pusiga",
                "Talensi",
                "Tempane",
            ],

            "Savannah" => [
                "Bole",
                "Central Gonja",
                "East Gonja Municipal",
                "North East Gonja",
                "North Gonja",
                "Sawla-Tuna-Kalba",
                "West Gonja",
            ],

            "Oti" => [
                "Biakoye",
                "Jasikan",
                "Kadjebi",
                "Krachi East Municipal",
                "Krachi Nchumuru",
                "Krachi West",
                "Nkwanta North",
                "Nkwanta South Municipal",
            ],

            "Oti" => [
                "Gushegu Municipal",
                "Karaga",
                "Kpandai",
                "Kumbungu",
                "Mion",
                "Nanton",
                "Nanumba North Municipal",
                "Nanumba South",
                "Saboba",
                "Sagnarigu Municipal",
                "Savelugu Municipal",
                "Tamale Metropolitan",
                "Tatale-Sangule",
                "Tolon",
                "Yendi Municipal",
                "Zabzugu",
            ],

            "North East" => [
                "Bunkpurugu Nakpanduri",
                "Chereponi",
                "East Mamprusi Municipal",
                "Mamprugo Moagduri",
                "West Mamprusi Municipal",
                "Yendi Municipal",
                "Yunyoo-Nasuan",
            ],

            "Central" => [
                "Abura-Asebu-Kwamankese",
                "Agona East",
                "Agona West Municipal",
                "Ajumako-Enyan-Essiam",
                "Asikuma-Odoben-Brakwa",
                "Assin Central Municipal",
                "Assin North",
                "Assin South",
                "Awutu Senya East",
                "Awutu Senya West",
                "Cape Coast Metropolitan",
                "Effutu Municipal",
                "Ekumfi",
                "Gomoa East",
                "Gomoa West",
                "Komenda-Edina-Eguafo-Abirem Municipal",
                "Mfantseman Municipal",
                "Twifo Atti Morkwa",
                "Twifo Hemang Lower Denkyira",
                "Upper Denkyira East Municipal",
                "Upper Denkyira West",
            ],

            "Eastern" => [
                "Abuakwa North Municipal",
                "Abuakwa South Municipal",
                "Achiase",
                "Akuapim North Municipal",
                "Akuapim South",
                "Akyemansa",
                "Asene Manso Akroso",
                "Asuogyaman",
                "Atiwa West",
                "Atiwa East",
                "Ayensuano",
                "Birim Central Municipal",
                "Birim North",
                "Birim South",
                "Denkyembour",
                "Fanteakwa North",
                "Fanteakwa South",
                "Kwaebibirem Municipal",
                "Kwahu Afram Plains North",
                "Kwahu Afram Plains South",
                "Kwahu East",
                "Kwahu South",
                "Kwahu West Municipal",
                "Lower Manya Krobo",
                "New Juaben South Municipal",
                "New Juaben North Municipal",
                "Nsawam Adoagyiri Municipal",
                "Okere",
                "Suhum",
                "Upper Manya Krobo",
                "Upper West Akim",
                "West Akim Municipal",
                "Yilo Krobo Municipal",
            ],

            "Greater Accra" => [
                "Ablekuma Central Municipal",
                "Ablekuma North Municipal",
                "Ablekuma West Municipal",
                "Accra Metropolitan",
                "Ada East",
                "Ada West",
                "Adentan Municipal",
                "Ashaiman Municipal",
                "Ayawaso Central Municipal",
                "Ayawaso East Municipal",
                "Ayawaso North Municipal",
                "Ayawaso West Municipal",
                "Ga East Municipal",
                "Ga Central",
                "Ga North Municipal",
                "Ga South Municipal",
                "Ga West Municipal",
                "Korle Klottey Municipal",
                "Kpone Katamanso Municipal",
                "Krowor Municipal",
                "La-Dade-Kotopon Municipal",
                "La-Nkwantanang-Madina",
                "Ledzokuku Municipal",
                "Ningo-Prampram",
                "Okaikwei North Municipal",
                "Shai-Osudoku",
                "Tema Metropolitan",
                "Tema West Municipal",
                "Weija Gbawe Municipal",
            ],

        );

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-region-district');
    }
}