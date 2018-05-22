<?php

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $name = array(
            'Adax',
            'Aguti Azarův',
            'Aligátor americký',
            'Amazoňan oranžovokřídlý',
            'Amazoňan pomoučený',
            'Anolis obrovský',
            'Antilopa jelení',
            'Antilopa koňská',
            'Ara arakanga',
            'Ara hyacintový',
            'Ara malý',
            'Ara rudobřichý',
            'Ara vojenský',
            'Arassari řasnatý',
            'Arassari zlatolící',
            'Bodlok Desjardinův',
            'Bodlok pestrý',
            'Bodlok tominský',
            'Bodlok žlutý',
            'Buvolec běločelý',
            'Čája chocholatá',
            'Čáp bělokrký',
            'Čáp černý',
            'Čáp jihoamerický',
            'Čáp sedlatý',
            'Čolek drobnoskvrnný',
            'Čolek horský',
            'Čolek luristánský',
            'Čolek obecný',
            'Dracéna krokodýlovitá',
            'Dudkovec stromový',
            'Dvojzoborožec nosorožčí',
            'Dvojzoborožec žlutozobý',
            'Dželada hnědá',
            'Emu hnědý',
            'Flétnák',
            'Gibon stříbrný',
            'Glyptoper velkoploutvý',
            'Hadilov písař',
            'Hoko pospolitý',
            'Hranobřich Valentinův',
            'Hroznýš královský',
            'Husa tibetská',
            'Husice kuří',
            'Husička vdovka',
            'Husovec stračí',
            'Hyena skvrnitá',
            'Chvostan bělolící',
            'Ibis posvátný',
            'Ibis rudý',
            'Ibis šedokřídlý',
            'Jeřáb Antigonin',
            'Jeřáb černokrký',
            'Jeřáb královský',
            'Jeřáb laločnatý',
            'Bugeranus carunculatus',
            'Jeřáb mandžuský',
            'Kakariki rudočelý',
            'Kakariki žlutočelý',
            'Kapybara',
            'Kasuár přilbový',
            'Kivi hnědý',
            'Kladivouš africký',
            'Klaun očkatý',
            'Klokan rudokrký',
            'Kolpík africký',
            'Kolpík růžový',
            'Kotinga tříbarvá',
            'Kotul veverovitý',
            'Krab Gecarcinus',
            'Krkavec bělokrký',
            'Krocan divoký',
            'Kudu velký',
            'Kuňka východní',
            'Labuť černá',
            'Labuť černokrká',
            'Lachtan hřivnatý',
            'Ledňáček trpasličí',
            'Leguán zelený',
            'Lemur kata',
            'Lenochod dvouprstý',
            'Lev konžský',
            'Mangusta černokrká',
            'Marabu africký',
            'Marabu indomalajský',
            'Matamata třásnitá',
            'Medvěd pyskatý',
            'Mlok skvrnitý',
            'Morčák velký',
            'Mravenečník čtyřprstý',
            'Mravenečník velký',
            'Nandu Darwinův',
            'Nestor kea',
            'Nesyt africký',
            'Nesyt bílý',
            'Nesyt indomalajský',
            'Nosál červený',
            'Nosorožec tuponosý jižní',
            'Ostnák jihoamerický',
            'Ostralka štíhlá',
            'Ovce domácí - valašská',
            'Ovce somálská',
            'Panda červená',
            'Papoušek šedohlavý',
            'Parníkovka létavá',
            'Páv korunkatý',
            'Pekari páskovaný',
            'Pelikán australský',
            'Pelikán bílý',
            'Pelikán skvrnozobý',
            'Perlička supí',
            'Peřovec tečkovaný',
            'Pes novoguinejský',
            'Pižmovka bělokřídlá',
            'Pižmovka ostruhatá',
            'Plameňák malý',
            'Plameňák růžový',
            'Polák malý',
            'Pomčík trnonoš',
            'Pralesnička azurová',
            'Pralesnička dvoubarvá',
            'Pralesnička strašná',
            'Prase savanové',
            'Pštros dvouprstý',
            'Puštík tečkovaný',
            'Pyskoun rozpůlený',
            'Ropucha kururu',
            'Ropucha obrovská',
            'Sasanka Haddonova',
            'Seriema černozobá',
            'Siba ománská',
            'Slípka modrá',
            'Slon africký',
            'Slunatec nádherný',
            'Snovač rudozobý',
            'Sup bělohlavý',
            'Sup himálajský',
            'Sup hnědý',
            'Sup chocholatý',
            'Sup kapucín',
            'Sup mrchožravý',
            'Sup Rüppellův',
            'Surikata',
            'Tamarín bělovousý',
            'Tamarín pestrý',
            'Tamarín tmavohřbetý',
            'Tapír čabrakový',
            'Tapír jihoamerický',
            'Tenkozobec opačný',
            'Tereka jednovousá',
            'Tlamovec africký',
            'Tlamovec hlavatý',
            'Tlamovec pestrý',
            'Tlamovec příčnopruhý',
            'Tlamovec Saulosův',
            'Tlamovec štíhlý',
            'Tlamovec Yellow Belly',
            'Toko žlutozobý',
            'Trubač agami',
            'Tučňák Humboldtův',
            'Tukan bělolící',
            'Turako bělobřichý',
            'Turako žlutozobý',
            'Tygr ussurijský',
            'Ústřičník velký',
            'Velbloud dvouhrbý',
            'Veverka šedobřichá',
            'Vikuňa',
            'Vlhovec červenohlavý',
            'Vlhovec červenohřbetý',
            'Vlhovec zelený',
            'Vlhovec žlutohřbetý',
            'Voduška abok',
            'Volavčík člunozobý',
            'Volavka nádherná',
            'Vousák černoskvrnný',
            'Vousák hnědoprsý',
            'Vousivka ploskohlavá',
            'Vrubozubec paví',
            'Vydra obrovská',
            'Výr bělavý',
            'Zebra stepní',
            'Zebu zakrslý',
            'Zejozob africký',
            'Zoborožec bělovlasatý',
            'Zoborožec havraní',
            'Zoborožec hrubozobý',
            'Zoborožec hvízdavý',
            'Zoborožec kaferský',
            'Zoborožec křiklavý',
            'Zoborožec šedolící',
            'Zoborožec temný',
            'Želva mohutná',
            'Želva ostruhatá',
            'Želva pardálí',
            'Želva podlouhlá',
            'Želva pralesní',
            'Žirafa Rothschildova'
        );

        $latinname = array(
            'Addax nasomaculatus',
            'Dasyprocta azarae',
            'Alligator mississippiensis',
            'Amazona amazonica',
            'Amazona farinosa virenticeps',
            'Anolis equestris',
            'Antilope cervicapra',
            'Hippotragus equinus',
            'Ara macao',
            'Anodorhynchus hyacinthinus',
            'Ara severa',
            'Orthopsittaca manilata',
            'Ara militaris mexicana',
            'Pteroglossus beauharnaesii',
            'Selenidera culik',
            'Zebrasoma Desjardinii',
            'Paracanthurus hepatus',
            'Ctenochaetus tominiensis',
            'Zebrasoma flavescens',
            'Damaliscus pygargus phillipsi',
            'Chauna torquata',
            'Ciconia episcopus',
            'Ciconia nigra',
            'Ciconia maguari',
            'Ephippiorhynchus senegalensis',
            'Neurergus microspilotus',
            'Triturus alpestris',
            'Neurergus kaiseri',
            'Triturus vulgaris',
            'Dracaena guianensis',
            'Phoeniculus purpureus',
            'Buceros rhinoceros',
            'Buceros bicornus',
            'Theropithecus gelada',
            'Dromaius novaehollandiae',
            'Gymnorhina tibicen',
            'Hylobates moloch',
            'Glyptoperichthys gibbiceps',
            'Sagittarius serpentarius',
            'Crax alector',
            'Canthigaster valentini',
            'Boa constrictor',
            'Anser indicus',
            'Cereopsis novaehollandiae',
            'Dendrocygna viduata',
            'Anseranas semipalmata',
            'Crocuta crocuta',
            'Pithecia pithecia',
            'Threskiornis aethiopicus',
            'Eudocimus ruber',
            'Theristicus melanopis',
            'Grus antigone',
            'Grus nigricollis',
            'Balearica regulorum gibbericeps',
            'Bugeranus carunculatus',
            'Grus japonensis',
            'Cyanoramphus novaezelandiae',
            'Cyanoramphus auriceps',
            'Paraneetroplus maculicauda',
            'Hydrochaeris hydrochaeris',
            'Casuarius casuarius',
            'Apteryx mantelli',
            'Scopus umbretta',
            'Amphiprion ocellaris',
            'Macropus rufogriseus',
            'Platalea alba',
            'Ajaia ajaja',
            'Perissocephalus tricolor',
            'Saimiri sciureus',
            'Gecarcinus quadratus',
            'Corvus albicollis',
            'Meleagris gallopavo f. domestica',
            'Tragelaphus strepsiceros',
            'Bombina orientalis',
            'Cygnus atratus',
            'Cygnus melanocoryphus',
            'Otaria byronia',
            'Ispidina picta',
            'Iguana iguana',
            'Lemur catta',
            'Choloepus didactylus',
            'Panthera leo bleyenberghi',
            'Mungos gambianus',
            'Leptoptilos crumeniferus',
            'Leptoptilos javanicus',
            'Chelus fimbriatus',
            'Melursus ursinus',
            'Salamandra salamandra',
            'Mergus merganser',
            'Tamandua tetradactyla',
            'Myrmecophaga tridactyla',
            'Pterocnemia pennata pennata',
            'Nestor notabilis',
            'Mycteria ibis',
            'Mycteria cinerea',
            'Mycteria leucocephala',
            'Nasua nasua',
            'Ceratotherium simum simum',
            'Jacana jacana',
            'Anas acuta',
            'Ovis aries aries',
            'Ovis orientalis aries',
            'Ailurus fulgens',
            'Poicephalus robustus fuscicollis',
            'Tachyeres patachonicus',
            'Pavo cristatus',
            'Pecari tajacu',
            'Pelecanus conspicillatus',
            'Pelecanus onocrotalus',
            'Pelecanus phillippensis',
            'Acryllium vulturinum',
            'Synodontis nigrita',
            'Canis dingo hallstromi',
            'Cairina scutulata',
            'Plectropterus gambensis',
            'Phoeniconaias minor',
            'Phoenicopterus ruber roseus',
            'Aythya nyroca',
            'Centropyge acanthops',
            'Dendrobates azureus',
            'Phyllobates bicolor',
            'Phyllobates terribilis',
            'Phacochoerus africanus africanus',
            'Struthio camelus',
            'Strix seloputo',
            'Labroides dimidiatus',
            'Bufo paracnemis',
            'Bufo marinus',
            'Stichodactyla haddoni',
            'Chunga burmeisteris',
            'Rhinoptera jayakari',
            'Porphyrio porphyrio',
            'Loxodonta africana',
            'Eurypyga helias',
            'Quelea quelea',
            'Gyps fulvus',
            'Gyps himalayensis',
            'Aegypius monachus',
            'Trigonoceps occipitalis',
            'Necrosyrtes monachus',
            'Neophron percnopterus',
            'Gyps rueppellii',
            'Suricata suricatta',
            'Saguinus mystax',
            'Saguinus bicolor',
            'Saguinus nigricollis graellsi',
            'Tapirus indicus',
            'Tapirus terrestris',
            'Recurvirostra avosetta',
            'Podocnemis unifilis',
            'Cylanotilapia afra',
            'Cyrtocara moorii',
            'Melanochromis auratus',
            'Pseudotropheus zebra',
            'Pseudotropheus saulosi',
            'Pseudotropheus elongatus',
            'Haplochromis sp. Yellow Belly',
            'Tockus flavirostris',
            'Psophia crepitans',
            'Spheniscus humboldti',
            'Ramphastos vitellinus',
            'Corythaixoides leucogaster',
            'Musophaga rossae',
            'Panthera tigris altaica',
            'Haematopus ostralegus',
            'Camelus bactrianus',
            'Tamiops swinhoei',
            'Vicugna vicugna',
            'Ablyramphus holosericeus',
            'Cacicus haemorrhous',
            'Psarocolius viridis',
            'Cacicus cela',
            'Kobus megaceros',
            'Cochlearius cochlearius cochlearius',
            'Ardeola speciosa',
            'Capito niger',
            'Lybius melanopterus',
            'Platemys platycephala',
            'Astronotus ocellatus',
            'Pteronura brasiliensis',
            'Bubo lacteus',
            'Equus quagga',
            'Bos primigenius indicus',
            'Anastomus lamelligerus',
            'Berenicornis albocristatus',
            'Bucorvus abyssinicus',
            'Ceratogymna atrata',
            'Ceratogymna fistulator fistulator',
            'Bucorvus leadbeateri',
            'Ceratogymna bucinator',
            'Bycanistes brevis',
            'Aceros plicatus',
            'Manouria emys',
            'Centrochelys sulcata',
            'Geochelone pardalis',
            'Indotestudo elongata',
            'Geochelone denticulata',
            'Giraffa camelopardalis rothschildi'
        );

        $url = array(
            '/media/photos/animal/item/gallery/images-567/85afaff5ec21671c02ba67a6a0e7cf4b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-393/25c09ff59fa51cc507d42f6b12c4814d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-568/7ad9a569a2db4cfd27b4b98a50d91649-t2.jpeg',
            '/media/photos/animal/item/gallery/images-581/13c48dbef90b2fb7053e437daba4488d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-703/9660a071f551bd5742552879da81688b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-565/2095d1c84a79ed2373e7722253f6c953-t2.jpeg',
            '/media/photos/animal/item/gallery/images-569/8e30db165ba5fd7b8d4613eea6875069-t2.jpeg',
            '/media/photos/animal/item/gallery/images-570/7c5d3d46823527969579a630a2e06e39-t2.jpeg',
            '/media/photos/animal/item/gallery/images-571/da44ea2d09a4a74ae344c2ca2ba74c9d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-572/63c217fa98d6cfe0ae836be762d3893a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-695/6eaff70897d2a61bcb6aaecd7f692f77-t2.jpeg',
            '/media/photos/animal/item/gallery/images-833/40bc24a763a5bee1ede2b512b99d312f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-445/9e82f1c9d19c39f7935d4a8562b8be9f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-652/4c2c9fbae3cfbeae01e576f1ea292439-t2.jpeg',
            '/media/photos/animal/item/gallery/images-446/37f17eaa3733cd734f58fcc149047376-t2.jpeg',
            '/media/photos/animal/item/gallery/images-712/c3bf00d9671fef12231f6d68ec6693c9-t2.jpeg',
            '/media/photos/animal/item/gallery/images-713/830eff1b355239817e2816cdc92d2777-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-715/96b3d286e76dc07f4e8fa20d62457265-t2.jpeg',
            '/media/photos/animal/item/gallery/images-573/eed258346a2232c40843b0fffb4ea327-t2.jpeg',
            '/media/photos/animal/item/gallery/images-574/809f55534389eb73388a99ad44d4e589-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-575/48139e5fcf8b498d1580d22e1e5eae81-t2.jpeg',
            '/media/photos/animal/item/gallery/images-576/bd4187d49b82307ed07c95af8e56d35b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-577/9d671b82dde3055796f3dcfc8d2bfab5-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-580/12035e57decf06bc652bb8dafa306c3d-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-579/be423ebf81026b0ca4fc625dd1914ed6-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-662/2b20d3d0a309866fc3b8382f1a2c96f3-t2.jpeg',
            '/media/photos/animal/item/gallery/images-689/bceb166d4b3cfc09de00e432a793f81a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-558/1323255f577011f1bc112c8279a93748-t2.jpeg',
            '/media/photos/animal/item/gallery/images-557/95dc7c786e4db882f4a1744ca5dd4180-t2.jpeg',
            '/media/photos/animal/item/gallery/images-654/85736cc3674629b89672e3a56dc91ba8-t2.jpeg',
            '/media/photos/animal/item/gallery/images-556/568f77124b4c0c731b51b052a80baad3-t2.jpeg',
            '/media/photos/animal/item/gallery/images-716/feb26ec5759d42283fe2d72ff4d21f24-t2.jpeg',
            '/media/photos/animal/item/gallery/images-555/a91097e95f3162a9ff5f7f0a92003375-t2.jpeg',
            '/media/photos/animal/item/gallery/images-582/a4ec7334e6d491afa1852fe6ee017938-t2.jpeg',
            '/media/photos/animal/item/gallery/images-717/00756a5fc82f7f237e46ffaafbae0645-t2.jpeg',
            '/media/photos/animal/item/gallery/images-583/e386b31d2f84e3ae966ef816a3b8ad56-t2.jpeg',
            '/media/photos/animal/item/gallery/images-585/fc15d709ce3ac3ee1cce9895f5eb8f8c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-655/f46e23367a7555c7f2d1c37ead6486b2-t2.jpeg',
            '/media/photos/animal/item/gallery/images-550/3c767006df393db55ab28138610f10b7-t2.jpeg',
            '/media/photos/animal/item/gallery/images-586/58f92b98d6e12d774f9e3f05e9214572-t2.jpeg',
            '/media/photos/animal/item/gallery/images-587/a98390b95d6786de7397e9fc0154a8ab-t2.jpeg',
            '/media/photos/animal/item/gallery/images-588/c3275b9bd1f89f7b9b2bdc27ec772f00-t2.jpeg',
            '/media/photos/animal/item/gallery/images-589/82dec0012ef92bcd844fde15e5060f09-t2.jpeg',
            '/media/photos/animal/item/gallery/images-590/c279afa0873aa06b205ecda805e07e66-t2.jpeg',
            '/media/photos/animal/item/gallery/images-591/7cfcdf3b9c665da171f0c4ecf33366cb-t2.jpeg',
            '/media/photos/animal/item/gallery/images-592/7bb7d3ac080ecf6e2c94749677df2c9d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-834/f1f949e5df2598c0e8d642d356b96d1c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-594/e8525c9f4d6aedd490228e3f0f454594-t2.jpeg',
            '/media/photos/animal/item/gallery/images-690/6abbf296698b722bbf2d4edc0b7bb1aa-t2.jpeg',
            '/media/photos/animal/item/gallery/images-696/c4486b41a8740e93f607a553b8ae488b-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-818/471a4c756ba2f0f2b6cbf9bd4828fb1b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-704/d3be460798fa107abaeed355afbf5401-t2.jpeg',
            '/media/photos/animal/item/gallery/images-596/b3de0526189fba80183d075eeed38da3-t2.jpeg',
            '/media/photos/animal/item/gallery/images-664/00a919e7146c10b181600abe3b1e69e0-t2.jpeg',
            '/media/photos/animal/item/gallery/images-663/52fdc4c03e8f6e85eb58127424e81d90-t2.jpeg',
            '/media/photos/animal/item/gallery/images-819/7951e806dc15db180f220b3f7aa1a05a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-598/bdad8799d0034e1f998a2afe6bc2d322-t2.jpeg',
            '/media/photos/animal/item/gallery/images-599/5db58634f429e735ef1d0e01e7bfa199-t2.jpeg',
            '/media/photos/animal/item/gallery/images-600/f9442e432e04e02e2bfd59beb76990d4-t2.jpeg',
            '/media/photos/animal/item/gallery/images-603/728e750f6603f99c3dd4c078d000e9b5-t2.jpeg',
            '/media/photos/animal/item/gallery/images-604/d9d9c1dc57c86d6df95091432dda21a7-t2.jpeg',
            '/media/photos/animal/item/gallery/images-605/1c140eb5bec8a6cc65fa7e3183a66585-t2.jpeg',
            '/media/photos/animal/item/gallery/images-658/ab0c53161c3718a9112685316c50d195-t2.jpeg',
            '/media/photos/animal/item/gallery/images-607/45162a5325a948abb595f9426c91455b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-529/10e3a7e4f8248bc95c3ba8772a485168-t2.jpeg',
            '/media/photos/animal/item/gallery/images-608/65064d696805509ae1695650c62d8683-t2.jpeg',
            '/media/photos/animal/item/gallery/images-609/6b974aa0b94e67552e224876b612de9f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-610/f0322bb3edac3d18a706f4150623afa0-t2.jpeg',
            '/media/photos/animal/item/gallery/images-611/362f0bccb2eaedf005d2f1f9ad5398fa-t2.jpeg',
            '/media/photos/animal/item/gallery/images-694/458cfb58c3926425eb55099ae1f3b857-t2.jpeg',
            '/media/photos/animal/item/gallery/images-612/00bb9fdbfa5b761a52775a46b6a06dfd-t2.jpeg',
            '/media/photos/animal/item/gallery/images-524/b56b59cedbdd9a8a023c24d0aa8a72b6-t2.jpeg',
            '/media/photos/animal/item/gallery/images-613/867de6801909c673845cc4ec61880324-t2.jpeg',
            '/media/photos/animal/item/gallery/images-614/3df308fc6543cf76394f9f0a4f667241-t2.jpeg',
            '/media/photos/animal/item/gallery/images-521/03781651638dbbe285cf0129788169e1-t2.jpeg',
            '/media/photos/animal/item/gallery/images-615/6235cb0d8b5a8da7144ee109513a049c-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-616/bff639fe0a936f5cb9a3aaf257c324ca-t2.jpeg',
            '/media/photos/animal/item/gallery/images-518/656309d8507a0d8490fc21edbbd22283-t2.jpeg',
            '/media/photos/animal/item/gallery/images-691/f63e7114ccddbd796949616839a4ee11-t2.jpeg',
            '/media/photos/animal/item/gallery/images-707/802a853ea068ea5393c6a98f536b24ee-t2.jpeg',
            '/media/photos/animal/item/gallery/images-618/6507e2652ac67d647ba5e1785ede53c2-t2.jpeg',
            '/media/photos/animal/item/gallery/images-514/13044eb58daddc1465e3ae14dd6daa99-t2.jpeg',
            '/media/photos/animal/item/gallery/images-513/3508aaa660d551c3e0c892c2c38d279f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-619/46d98c1e4036a311742d34bf2747ddf2-t2.jpeg',
            '/media/photos/animal/item/gallery/images-620/44a874b130f547e00b13d7cf040d2226-t2.jpeg',
            '/media/photos/animal/item/gallery/images-621/0cec1db80a1382fcaf0b7f2e31dacea0-t2.jpeg',
            '/media/photos/animal/item/gallery/images-622/e9581f6245010c1197568407a2181382-t2.jpeg',
            '/media/photos/animal/item/gallery/images-624/2caf891a34d618a3902aed90163999c6-t2.jpeg',
            '/media/photos/animal/item/gallery/images-507/98f6d69fda72a7e1a05fc158ece686ba-t2.jpeg',
            '/media/photos/animal/item/gallery/images-506/1ec2d4b7da4c86a0110146a4911049cb-t2.jpeg',
            '/media/photos/animal/item/gallery/images-699/6a073874da069d0c185c09894b91c8bf-t2.jpeg',
            '/media/photos/animal/item/gallery/images-505/77750cda3bd1fc547b5bfe96d4a69f0c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-626/8a7cd0b298157b4354a13a100c16d276-t2.jpeg',
            '/media/photos/animal/item/gallery/images-627/f422c4327c47bf46720b9d45accd41fe-t2.jpeg',
            '/media/photos/animal/item/gallery/images-836/a08ddd85297a1e52e916b625235d1d8a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-628/6f9143d56bc3d6782bd17ddf8c20e7f1-t2.jpeg',
            '/media/photos/animal/item/gallery/images-629/ed8ce7cfbda5151a0b6eb67f7d635b49-t2.jpeg',
            '/media/photos/animal/item/gallery/images-630/bbbfca4bdefe0b2bc697221e4943a32a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-631/1b2bf138951440d139741793bd044375-t2.jpeg',
            '/media/photos/animal/item/gallery/images-499/06c807bb91d9f28d87df75048d6b0c0c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-632/b3e2ab3cfa030be517d684859afebaa3-t2.jpeg',
            '/media/photos/animal/item/gallery/images-633/fe7bc80af48f77bb7fc01975c67e4a15-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-634/c515e1b2ccefd0854554b2807199d6bc-t2.jpeg',
            '/media/photos/animal/item/gallery/images-665/77e961953bc2accb350601fc35874b8c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-636/ea440720555780482e2138f930926b00-t2.jpeg',
            '/media/photos/animal/item/gallery/images-637/e4e5abfbb88f3b7b926151ebe09c2890-t2.jpeg',
            '/media/photos/animal/item/gallery/images-638/6f842614fb1a082b74f62518e7549377-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-639/9aedc8a8225d3a60ba8ec750a5e44fee-t2.jpeg',
            '/media/photos/animal/item/gallery/images-661/f887bfc4d9f798703fa67b890fcc880b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-660/3d8ac24d03c70ac6333f2272684de330-t2.jpeg',
            '/media/photos/animal/item/gallery/images-492/5d71440a9a1e567005e5c49bfcefda92-t2.jpeg',
            '/media/photos/animal/item/gallery/images-700/7af714820db6b543ad7a0132b057b9ab-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-820/62e8122db8620a431ff6140528edd79c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-687/52c47783d0c3dadc1363af38a2004890-t2.jpeg',
            '/media/photos/animal/item/gallery/images-688/3d3b577979cdc43a382fdc54a62e5223-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-709/a8fea751b2f922f7e0bad0fe5b97566d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-490/87b780d08464aaa7c3777778e788b9c3-t3.jpeg',
            '/media/photos/animal/item/gallery/images-643/29119f61c49d342796276edab6514477-t2.jpeg',
            '/media/photos/animal/item/gallery/images-644/10ab0abdce4e3dd8af176e24cafbc028-t2.jpeg',
            '/media/photos/animal/item/gallery/images-487/a29147eed0573f74e4125b591c61cb88-t2.jpeg',
            '/media/photos/animal/item/gallery/images-486/cba88f37bf5449e4bf2d075834dbf4ed-t3.jpeg',
            '/media/photos/animal/item/gallery/images-645/2692c16f3c7524ed83ce08d51957cadd-t2.jpeg',
            '/media/photos/animal/item/gallery/images-646/fc47a51a4f39eb601dbefce7c402b80f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-483/38e51220fca17709113f92bd937a4baf-t2.jpeg',
            '/media/photos/animal/item/gallery/images-647/91f73f82fc2e2e919500898412f305f5-t2.jpeg',
            '/media/photos/animal/item/gallery/images-667/e818ba7936967c8c64728538a6100865-t2.jpeg',
            '/media/photos/animal/item/gallery/images-648/8a2dedfdd778dab9c25e2ab80885f2bd-t2.jpeg',
            '/media/photos/animal/item/gallery/images-649/5d78ade7cf6f2842c060cc546b088368-t2.jpeg',
            '/media/photos/animal/item/gallery/images-650/cf4ee5de183dc0ac012c4114201ca646-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-731/b45d8ddf4530f6d9a779a6a9deb21fbc-t2.jpeg',
            '/media/photos/animal/item/gallery/images-479/9eb0699e521cfae38241322d22895a06-t2.jpeg',
            '/media/photos/animal/item/gallery/images-478/8e5681a53f9a4b2c355e3daaca6bda1e-t2.jpeg',
            '/media/photos/animal/item/gallery/images-477/f0fa359ea3383f4aacdb5bdc9b0e50df-t2.jpeg',
            '/media/photos/animal/item/gallery/images-706/c4a5dff0ecf5de7cf592d91697773490-t2.jpeg',
            '/media/photos/animal/item/gallery/images-476/77058aebb1fe33be2e1db29057421f38-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-670/66a172449c6bc8f7315bca28e5eeb513-t2.jpeg',
            '/media/photos/animal/item/gallery/images-474/611ab1df01bf32ab42ef6738aa7f9635-t2.jpeg',
            '/media/photos/animal/item/gallery/images-473/51d92c5563192cb2af3311835dee2c05-t2.jpeg',
            '/media/photos/animal/item/gallery/images-472/518222025254b9dc4b770c11f92eb0ee-t2.jpeg',
            '/media/photos/animal/item/gallery/images-671/e9a7c5f0900b68845ac67aa9169ae2f0-t2.jpeg',
            '/media/photos/animal/item/gallery/images-471/d81c4778332f423cfa667f2468991de7-t2.jpeg',
            '/media/photos/animal/item/gallery/images-470/4df2a180a46908821294f9be9c1edd36-t2.jpeg',
            '/media/photos/animal/item/gallery/images-469/47a7247b9bd2db19622c14bf6c20699b-t2.jpeg',
            '/media/photos/animal/item/gallery/images-467/29f29aa1b3ddcfcfb9fbf34890b97ed2-t2.jpeg',
            '/media/photos/animal/item/gallery/images-672/e64fa94b09befd3a0a5d3412f7df71fc-t2.jpeg',
            '/media/photos/animal/item/gallery/images-466/e83b359bbb7115a56e883c82f9702013-t2.jpeg',
            '/media/photos/animal/item/gallery/images-465/1dee4bc47d14bc88f10472915f910713-t2.jpeg',
            '/media/photos/animal/item/gallery/images-673/1c4541b63aa10ab68414c92fcf6f2d7d-t2.jpeg',
            '/media/photos/animal/item/gallery/images-674/54b405e3a54a5cfb7acffb06d0c4cd8f-t2.jpeg',
            '/media/photos/animal/item/gallery/images-675/7fe860f0dcf590c1c974213b92248241-t2.jpeg',
            '/media/photos/animal/item/gallery/images-837/6bcc2ea6d846159c8c66c364a30fcb91-t2.jpeg',
            '/media/photos/animal/item/gallery/images-676/b460f01155d609e13a1b1bbb107fbbbf-t2.jpeg',
            '/media/photos/animal/item/gallery/images-835/8c022803cc3bd7d3b1103dce533f97fe-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-677/ce29ef98763f8ba75526e0e9405743a7-t2.jpeg',
            '/media/photos/animal/item/gallery/images-686/ea65a11fcbc7dd87f840b86d9ec1362e-t2.jpeg',
            '/media/photos/animal/item/gallery/images-678/34586f41083209c3f18774c4160caaf9-t2.jpeg',
            '/media/photos/animal/item/gallery/images-463/3ebd5504597137e5cf97d02cbd9cbd6a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-679/17d12446d2fdae174dd468ac9b84cfed-t2.jpeg',
            '/media/photos/animal/item/gallery/images-680/1f15069985f527fc0286fb672aaac0f8-t2.jpeg',
            '/media/photos/animal/item/gallery/images-681/58357c607df1b2c6d9c566d8b4cc2287-t2.jpeg',
            '/media/photos/animal/item/gallery/images-461/eaa15a57415c05780d96d894acf320de-t2.jpeg',
            '/media/photos/animal/item/gallery/images-682/6689f2953cfbbb2e2ff51e9e5a2029b1-t2.jpeg',
            '/media/photos/animal/item/gallery/images-683/1b796fe3a22e576fd7dcdeb8d93eae5c-t2.jpeg',
            '/media/photos/animal/item/gallery/images-693/9f47a692941c4f4065c6e4dbb35c941a-t2.jpeg',
            '/media/photos/animal/item/gallery/images-701/728a826a77877a73dc6c2537b2965369-t2.jpeg',
            '/media/photos/animal/item/gallery/images-458/92b136d3685597760ccbb2e2d0f455d2-t2.jpeg',
            '/media/photos/animal/item/gallery/images-684/5a422233f9c509cd7c3d6a8f93d7f72d-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-705/f1b5489d588de8906db30fa594bc001a-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-455/f6e8621249a01c256c3a4177ffe5a021-t2.jpeg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/fassets/images/seznam-zvirat/empty.jpg',
            '/media/photos/animal/item/gallery/images-454/32c8b128cc01b87e46d731f8e98eb3ee-t2.jpeg'
        );

        for ($i=0; $i < 198; $i++) {
            Animal::create([
                'name' => $name[$i],
                'latinname' => $latinname[$i],
                'count' => rand(1, 10),
                'imageurl' => $url[$i],
            ]);

        }

    }
}
