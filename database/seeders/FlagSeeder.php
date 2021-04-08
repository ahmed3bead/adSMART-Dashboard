<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flag::insert([
            ["flag_id"=>1,"flag_name"=>"austria","flag_svg"=>"001-austria.svg","phone_code"=>"43","code2"=>"AT","code3"=>"AUT"], ["flag_id"=>2,"flag_name"=>"mauritius","flag_svg"=>"001-mauritius.svg","phone_code"=>"230","code2"=>"MU","code3"=>"MUS"], ["flag_id"=>3,"flag_name"=>"belgium","flag_svg"=>"002-belgium.svg","phone_code"=>"32","code2"=>"BE","code3"=>"BEL"], ["flag_id"=>4,"flag_name"=>"austria","flag_svg"=>"003-austria.svg","phone_code"=>"43","code2"=>"AT","code3"=>"AUT"], ["flag_id"=>5,"flag_name"=>"switzerland","flag_svg"=>"003-switzerland.svg","phone_code"=>"41","code2"=>"CH","code3"=>"CHE"], ["flag_id"=>6,"flag_name"=>"indonesia","flag_svg"=>"004-indonesia.svg","phone_code"=>"62","code2"=>"ID","code3"=>"IDN"], ["flag_id"=>7,"flag_name"=>"oman","flag_svg"=>"004-oman.svg","phone_code"=>"968","code2"=>"OM","code3"=>"OMN"], ["flag_id"=>8,"flag_name"=>"ethiopia","flag_svg"=>"005-ethiopia.svg","phone_code"=>"251","code2"=>"ET","code3"=>"ETH"], ["flag_id"=>9,"flag_name"=>"portugal","flag_svg"=>"005-portugal.svg","phone_code"=>"351","code2"=>"PT","code3"=>"PRT"], ["flag_id"=>10,"flag_name"=>"tanzania","flag_svg"=>"006-tanzania.svg","phone_code"=>"255","code2"=>"TZ","code3"=>"TZA"], ["flag_id"=>11,"flag_name"=>"turkey","flag_svg"=>"006-turkey.svg","phone_code"=>"90","code2"=>"TR","code3"=>"TUR"], ["flag_id"=>12,"flag_name"=>"malasya","flag_svg"=>"007-malasya.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>13,"flag_name"=>"nicaragua","flag_svg"=>"007-nicaragua.svg","phone_code"=>"505","code2"=>"NI","code3"=>"NIC"], ["flag_id"=>14,"flag_name"=>"estonia","flag_svg"=>"008-estonia.svg","phone_code"=>"372","code2"=>"EE","code3"=>"EST"], ["flag_id"=>15,"flag_name"=>"saudi arabia","flag_svg"=>"008-saudi-arabia.svg","phone_code"=>"966","code2"=>"SA","code3"=>"SAU"], ["flag_id"=>16,"flag_name"=>"australia","flag_svg"=>"009-australia.svg","phone_code"=>"61","code2"=>"AU","code3"=>"AUS"], ["flag_id"=>17,"flag_name"=>"uganda","flag_svg"=>"009-uganda.svg","phone_code"=>"256","code2"=>"UG","code3"=>"UGA"], ["flag_id"=>18,"flag_name"=>"india","flag_svg"=>"010-india.svg","phone_code"=>"91","code2"=>"IN","code3"=>"IND"], ["flag_id"=>19,"flag_name"=>"slovenia","flag_svg"=>"010-slovenia.svg","phone_code"=>"386","code2"=>"SI","code3"=>"SVN"], ["flag_id"=>20,"flag_name"=>"brazil","flag_svg"=>"011-brazil.svg","phone_code"=>"55","code2"=>"BR","code3"=>"BRA"], ["flag_id"=>21,"flag_name"=>"zimbabwe","flag_svg"=>"011-zimbabwe.svg","phone_code"=>"263","code2"=>"ZW","code3"=>"ZWE"], ["flag_id"=>22,"flag_name"=>"sao tome and prince","flag_svg"=>"012-sao-tome-and-prince.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>23,"flag_name"=>"uk","flag_svg"=>"012-uk.svg","phone_code"=>"380","code2"=>"UA","code3"=>"UKR"], ["flag_id"=>24,"flag_name"=>"italy","flag_svg"=>"013-italy.svg","phone_code"=>"39","code2"=>"IT","code3"=>"ITA"], ["flag_id"=>25,"flag_name"=>"russia","flag_svg"=>"013-russia.svg","phone_code"=>"70","code2"=>"RU","code3"=>"RUS"], ["flag_id"=>26,"flag_name"=>"japan","flag_svg"=>"014-japan.svg","phone_code"=>"81","code2"=>"JP","code3"=>"JPN"], ["flag_id"=>27,"flag_name"=>"wales","flag_svg"=>"014-wales.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>28,"flag_name"=>"china","flag_svg"=>"015-china.svg","phone_code"=>"86","code2"=>"CN","code3"=>"CHN"], ["flag_id"=>29,"flag_name"=>"el salvador","flag_svg"=>"015-el-salvador.svg","phone_code"=>"503","code2"=>"SV","code3"=>"SLV"], ["flag_id"=>30,"flag_name"=>"nepal","flag_svg"=>"016-nepal.svg","phone_code"=>"977","code2"=>"NP","code3"=>"NPL"], ["flag_id"=>31,"flag_name"=>"spain","flag_svg"=>"016-spain.svg","phone_code"=>"34","code2"=>"ES","code3"=>"ESP"], ["flag_id"=>32,"flag_name"=>"christmas island","flag_svg"=>"017-christmas-island.svg","phone_code"=>"61","code2"=>"CX","code3"=>null], ["flag_id"=>33,"flag_name"=>"germany","flag_svg"=>"017-germany.svg","phone_code"=>"49","code2"=>"DE","code3"=>"DEU"], ["flag_id"=>34,"flag_name"=>"lebanon","flag_svg"=>"018-lebanon.svg","phone_code"=>"961","code2"=>"LB","code3"=>"LBN"], ["flag_id"=>35,"flag_name"=>"south korea","flag_svg"=>"018-south-korea.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>36,"flag_name"=>"ceuta","flag_svg"=>"019-ceuta.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>37,"flag_name"=>"france","flag_svg"=>"019-france.svg","phone_code"=>"33","code2"=>"FR","code3"=>"FRA"], ["flag_id"=>38,"flag_name"=>"flag","flag_svg"=>"020-flag.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>39,"flag_name"=>"iraq","flag_svg"=>"020-iraq.svg","phone_code"=>"964","code2"=>"IQ","code3"=>"IRQ"], ["flag_id"=>40,"flag_name"=>"cook islands","flag_svg"=>"021-cook-islands.svg","phone_code"=>"682","code2"=>"CK","code3"=>"COK"], ["flag_id"=>41,"flag_name"=>"mexico","flag_svg"=>"021-mexico.svg","phone_code"=>"52","code2"=>"MX","code3"=>"MEX"], ["flag_id"=>42,"flag_name"=>"syria","flag_svg"=>"022-syria.svg","phone_code"=>"963","code2"=>"SY","code3"=>"SYR"], ["flag_id"=>43,"flag_name"=>"cocos island","flag_svg"=>"023-cocos-island.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>44,"flag_name"=>"honduras","flag_svg"=>"024-honduras.svg","phone_code"=>"504","code2"=>"HN","code3"=>"HND"], ["flag_id"=>45,"flag_name"=>"anguilla","flag_svg"=>"025-anguilla.svg","phone_code"=>"1264","code2"=>"AI","code3"=>"AIA"], ["flag_id"=>46,"flag_name"=>"qatar","flag_svg"=>"026-qatar.svg","phone_code"=>"974","code2"=>"QA","code3"=>"QAT"], ["flag_id"=>47,"flag_name"=>"american samoa","flag_svg"=>"027-american-samoa.svg","phone_code"=>"1684","code2"=>"AS","code3"=>"ASM"], ["flag_id"=>48,"flag_name"=>"puerto rico","flag_svg"=>"028-puerto-rico.svg","phone_code"=>"1787","code2"=>"PR","code3"=>"PRI"], ["flag_id"=>49,"flag_name"=>"comoros","flag_svg"=>"029-comoros.svg","phone_code"=>"269","code2"=>"KM","code3"=>"COM"], ["flag_id"=>50,"flag_name"=>"north korea","flag_svg"=>"030-north-korea.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>51,"flag_name"=>"corsica","flag_svg"=>"031-corsica.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>52,"flag_name"=>"zambia","flag_svg"=>"032-zambia.svg","phone_code"=>"260","code2"=>"ZM","code3"=>"ZMB"], ["flag_id"=>53,"flag_name"=>"saint kitts and nevis","flag_svg"=>"033-saint-kitts-and-nevis.svg","phone_code"=>"1869","code2"=>"KN","code3"=>"KNA"], ["flag_id"=>54,"flag_name"=>"china","flag_svg"=>"034-china.svg","phone_code"=>"86","code2"=>"CN","code3"=>"CHN"], ["flag_id"=>55,"flag_name"=>"luxembourg","flag_svg"=>"035-luxembourg.svg","phone_code"=>"352","code2"=>"LU","code3"=>"LUX"], ["flag_id"=>56,"flag_name"=>"central african republic","flag_svg"=>"036-central-african-republic.svg","phone_code"=>"236","code2"=>"CF","code3"=>"CAF"], ["flag_id"=>57,"flag_name"=>"jamaica","flag_svg"=>"037-jamaica.svg","phone_code"=>"1876","code2"=>"JM","code3"=>"JAM"], ["flag_id"=>58,"flag_name"=>"cape verde","flag_svg"=>"038-cape-verde.svg","phone_code"=>"238","code2"=>"CV","code3"=>"CPV"], ["flag_id"=>59,"flag_name"=>"monaco","flag_svg"=>"039-monaco.svg","phone_code"=>"377","code2"=>"MC","code3"=>"MCO"], ["flag_id"=>60,"flag_name"=>"bhutan","flag_svg"=>"040-bhutan.svg","phone_code"=>"975","code2"=>"BT","code3"=>"BTN"], ["flag_id"=>61,"flag_name"=>"paraguay","flag_svg"=>"041-paraguay.svg","phone_code"=>"595","code2"=>"PY","code3"=>"PRY"], ["flag_id"=>62,"flag_name"=>"aruba","flag_svg"=>"042-aruba.svg","phone_code"=>"297","code2"=>"AW","code3"=>"ABW"], ["flag_id"=>63,"flag_name"=>"montserrat","flag_svg"=>"043-montserrat.svg","phone_code"=>"1664","code2"=>"MS","code3"=>"MSR"], ["flag_id"=>64,"flag_name"=>"latvia","flag_svg"=>"044-latvia.svg","phone_code"=>"371","code2"=>"LV","code3"=>"LVA"], ["flag_id"=>65,"flag_name"=>"andorra","flag_svg"=>"045-andorra.svg","phone_code"=>"376","code2"=>"AD","code3"=>"AND"], ["flag_id"=>66,"flag_name"=>"micronesia","flag_svg"=>"046-micronesia.svg","phone_code"=>"691","code2"=>"FM","code3"=>"FSM"], ["flag_id"=>67,"flag_name"=>"dominican republic","flag_svg"=>"047-dominican-republic.svg","phone_code"=>"1809","code2"=>"DO","code3"=>"DOM"], ["flag_id"=>68,"flag_name"=>"abkhazia","flag_svg"=>"048-abkhazia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>69,"flag_name"=>"tunisia","flag_svg"=>"049-tunisia.svg","phone_code"=>"216","code2"=>"TN","code3"=>"TUN"], ["flag_id"=>70,"flag_name"=>"mauritania","flag_svg"=>"050-mauritania.svg","phone_code"=>"222","code2"=>"MR","code3"=>"MRT"], ["flag_id"=>71,"flag_name"=>"cayman islands","flag_svg"=>"051-cayman-islands.svg","phone_code"=>"1345","code2"=>"KY","code3"=>"CYM"], ["flag_id"=>72,"flag_name"=>"kosovo","flag_svg"=>"052-kosovo.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>73,"flag_name"=>"ghana","flag_svg"=>"053-ghana.svg","phone_code"=>"233","code2"=>"GH","code3"=>"GHA"], ["flag_id"=>74,"flag_name"=>"canary islands","flag_svg"=>"054-canary-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>75,"flag_name"=>"scotland","flag_svg"=>"055-scotland.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>76,"flag_name"=>"guinea bissau","flag_svg"=>"056-guinea-bissau.svg","phone_code"=>"245","code2"=>"GW","code3"=>"GNB"], ["flag_id"=>77,"flag_name"=>"burundi","flag_svg"=>"057-burundi.svg","phone_code"=>"257","code2"=>"BI","code3"=>"BDI"], ["flag_id"=>78,"flag_name"=>"myanmar","flag_svg"=>"058-myanmar.svg","phone_code"=>"95","code2"=>"MM","code3"=>"MMR"], ["flag_id"=>79,"flag_name"=>"gabon","flag_svg"=>"059-gabon.svg","phone_code"=>"241","code2"=>"GA","code3"=>"GAB"], ["flag_id"=>80,"flag_name"=>"benin","flag_svg"=>"060-benin.svg","phone_code"=>"229","code2"=>"BJ","code3"=>"BEN"], ["flag_id"=>81,"flag_name"=>"saba island","flag_svg"=>"061-saba-island.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>82,"flag_name"=>"namibia","flag_svg"=>"062-namibia.svg","phone_code"=>"264","code2"=>"NA","code3"=>"NAM"], ["flag_id"=>83,"flag_name"=>"japan","flag_svg"=>"063-japan.svg","phone_code"=>"81","code2"=>"JP","code3"=>"JPN"], ["flag_id"=>84,"flag_name"=>"lithuania","flag_svg"=>"064-lithuania.svg","phone_code"=>"370","code2"=>"LT","code3"=>"LTU"], ["flag_id"=>85,"flag_name"=>"eritrea","flag_svg"=>"065-eritrea.svg","phone_code"=>"291","code2"=>"ER","code3"=>"ERI"], ["flag_id"=>86,"flag_name"=>"chad","flag_svg"=>"066-chad.svg","phone_code"=>"235","code2"=>"TD","code3"=>"TCD"], ["flag_id"=>87,"flag_name"=>"kenya","flag_svg"=>"067-kenya.svg","phone_code"=>"254","code2"=>"KE","code3"=>"KEN"], ["flag_id"=>88,"flag_name"=>"djibouti","flag_svg"=>"068-djibouti.svg","phone_code"=>"253","code2"=>"DJ","code3"=>"DJI"], ["flag_id"=>89,"flag_name"=>"british indian ocean territory","flag_svg"=>"069-british-indian-ocean-territory.svg","phone_code"=>"246","code2"=>"IO","code3"=>null], ["flag_id"=>90,"flag_name"=>"tuvalu 1","flag_svg"=>"070-tuvalu-1.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>91,"flag_name"=>"serbia","flag_svg"=>"071-serbia.svg","phone_code"=>"381","code2"=>"CS","code3"=>null], ["flag_id"=>92,"flag_name"=>"bonaire","flag_svg"=>"072-bonaire.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>93,"flag_name"=>"togo","flag_svg"=>"073-togo.svg","phone_code"=>"228","code2"=>"TG","code3"=>"TGO"], ["flag_id"=>94,"flag_name"=>"kazakhstan","flag_svg"=>"074-kazakhstan.svg","phone_code"=>"7","code2"=>"KZ","code3"=>"KAZ"], ["flag_id"=>95,"flag_name"=>"antigua and barbuda","flag_svg"=>"075-antigua-and-barbuda.svg","phone_code"=>"1268","code2"=>"AG","code3"=>"ATG"], ["flag_id"=>96,"flag_name"=>"suriflag_name","flag_svg"=>"076-suriname.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>97,"flag_name"=>"jordan","flag_svg"=>"077-jordan.svg","phone_code"=>"962","code2"=>"JO","code3"=>"JOR"], ["flag_id"=>98,"flag_name"=>"belize","flag_svg"=>"078-belize.svg","phone_code"=>"501","code2"=>"BZ","code3"=>"BLZ"], ["flag_id"=>99,"flag_name"=>"st barts","flag_svg"=>"079-st-barts.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>100,"flag_name"=>"iceland","flag_svg"=>"080-iceland.svg","phone_code"=>"354","code2"=>"IS","code3"=>"ISL"], ["flag_id"=>101,"flag_name"=>"bermuda","flag_svg"=>"081-bermuda.svg","phone_code"=>"1441","code2"=>"BM","code3"=>"BMU"], ["flag_id"=>102,"flag_name"=>"united nations","flag_svg"=>"082-united-nations.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>103,"flag_name"=>"somalia","flag_svg"=>"083-somalia.svg","phone_code"=>"252","code2"=>"SO","code3"=>"SOM"], ["flag_id"=>104,"flag_name"=>"barbados","flag_svg"=>"084-barbados.svg","phone_code"=>"1246","code2"=>"BB","code3"=>"BRB"], ["flag_id"=>105,"flag_name"=>"solomon islands","flag_svg"=>"085-solomon-islands.svg","phone_code"=>"677","code2"=>"SB","code3"=>"SLB"], ["flag_id"=>106,"flag_name"=>"nigeria","flag_svg"=>"086-nigeria.svg","phone_code"=>"234","code2"=>"NG","code3"=>"NGA"], ["flag_id"=>107,"flag_name"=>"aland islands","flag_svg"=>"087-aland-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>108,"flag_name"=>"uruguay","flag_svg"=>"088-uruguay.svg","phone_code"=>"598","code2"=>"UY","code3"=>"URY"], ["flag_id"=>109,"flag_name"=>"sint maarten","flag_svg"=>"089-sint-maarten.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>110,"flag_name"=>"burkina faso","flag_svg"=>"090-burkina-faso.svg","phone_code"=>"226","code2"=>"BF","code3"=>"BFA"], ["flag_id"=>111,"flag_name"=>"slovakia","flag_svg"=>"091-slovakia.svg","phone_code"=>"421","code2"=>"SK","code3"=>"SVK"], ["flag_id"=>112,"flag_name"=>"sierra leone","flag_svg"=>"092-sierra-leone.svg","phone_code"=>"232","code2"=>"SL","code3"=>"SLE"], ["flag_id"=>113,"flag_name"=>"basque country","flag_svg"=>"093-basque-country.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>114,"flag_name"=>"south korea","flag_svg"=>"094-south-korea.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>115,"flag_name"=>"pitcairn islands","flag_svg"=>"095-pitcairn-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>116,"flag_name"=>"mozambique","flag_svg"=>"096-mozambique.svg","phone_code"=>"258","code2"=>"MZ","code3"=>"MOZ"], ["flag_id"=>117,"flag_name"=>"san marino","flag_svg"=>"097-san-marino.svg","phone_code"=>"378","code2"=>"SM","code3"=>"SMR"], ["flag_id"=>118,"flag_name"=>"guatemala","flag_svg"=>"098-guatemala.svg","phone_code"=>"502","code2"=>"GT","code3"=>"GTM"], ["flag_id"=>119,"flag_name"=>"albania","flag_svg"=>"099-albania.svg","phone_code"=>"355","code2"=>"AL","code3"=>"ALB"], ["flag_id"=>120,"flag_name"=>"pakistan","flag_svg"=>"100-pakistan.svg","phone_code"=>"92","code2"=>"PK","code3"=>"PAK"], ["flag_id"=>121,"flag_name"=>"northern cyprus","flag_svg"=>"101-northern-cyprus.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>122,"flag_name"=>"balearic islands","flag_svg"=>"102-balearic-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>123,"flag_name"=>"marshall island","flag_svg"=>"103-marshall-island.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>124,"flag_name"=>"ecuador","flag_svg"=>"104-ecuador.svg","phone_code"=>"593","code2"=>"EC","code3"=>"ECU"], ["flag_id"=>125,"flag_name"=>"cameroon","flag_svg"=>"105-cameroon.svg","phone_code"=>"237","code2"=>"CM","code3"=>"CMR"], ["flag_id"=>126,"flag_name"=>"panama","flag_svg"=>"106-panama.svg","phone_code"=>"507","code2"=>"PA","code3"=>"PAN"], ["flag_id"=>127,"flag_name"=>"kwait","flag_svg"=>"107-kwait.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>128,"flag_name"=>"armenia","flag_svg"=>"108-armenia.svg","phone_code"=>"374","code2"=>"AM","code3"=>"ARM"], ["flag_id"=>129,"flag_name"=>"romania","flag_svg"=>"109-romania.svg","phone_code"=>"40","code2"=>"RO","code3"=>"ROM"], ["flag_id"=>130,"flag_name"=>"guinea","flag_svg"=>"110-guinea.svg","phone_code"=>"224","code2"=>"GN","code3"=>"GIN"], ["flag_id"=>131,"flag_name"=>"afghanistan","flag_svg"=>"111-afghanistan.svg","phone_code"=>"93","code2"=>"AF","code3"=>"AFG"], ["flag_id"=>132,"flag_name"=>"laos","flag_svg"=>"112-laos.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>133,"flag_name"=>"greenland","flag_svg"=>"113-greenland.svg","phone_code"=>"299","code2"=>"GL","code3"=>"GRL"], ["flag_id"=>134,"flag_name"=>"british virgin islands","flag_svg"=>"114-british-virgin-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>135,"flag_name"=>"hungary","flag_svg"=>"115-hungary.svg","phone_code"=>"36","code2"=>"HU","code3"=>"HUN"], ["flag_id"=>136,"flag_name"=>"curacao","flag_svg"=>"116-curacao.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>137,"flag_name"=>"angola","flag_svg"=>"117-angola.svg","phone_code"=>"244","code2"=>"AO","code3"=>"AGO"], ["flag_id"=>138,"flag_name"=>"malasya","flag_svg"=>"118-malasya.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>139,"flag_name"=>"brunei","flag_svg"=>"119-brunei.svg","phone_code"=>"673","code2"=>"BN","code3"=>"BRN"], ["flag_id"=>140,"flag_name"=>"bahamas","flag_svg"=>"120-bahamas.svg","phone_code"=>"1242","code2"=>"BS","code3"=>"BHS"], ["flag_id"=>141,"flag_name"=>"new zealand","flag_svg"=>"121-new-zealand.svg","phone_code"=>"64","code2"=>"NZ","code3"=>"NZL"], ["flag_id"=>142,"flag_name"=>"british columbia","flag_svg"=>"123-british-columbia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>143,"flag_name"=>"vatican city","flag_svg"=>"124-vatican-city.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>144,"flag_name"=>"finland","flag_svg"=>"125-finland.svg","phone_code"=>"358","code2"=>"FI","code3"=>"FIN"], ["flag_id"=>145,"flag_name"=>"botswana","flag_svg"=>"126-botswana.svg","phone_code"=>"267","code2"=>"BW","code3"=>"BWA"], ["flag_id"=>146,"flag_name"=>"sri lanka","flag_svg"=>"127-sri-lanka.svg","phone_code"=>"94","code2"=>"LK","code3"=>"LKA"], ["flag_id"=>147,"flag_name"=>"spain","flag_svg"=>"128-spain.svg","phone_code"=>"34","code2"=>"ES","code3"=>"ESP"], ["flag_id"=>148,"flag_name"=>"ossetia","flag_svg"=>"129-ossetia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>149,"flag_name"=>"sicily","flag_svg"=>"130-sicily.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>150,"flag_name"=>"chile","flag_svg"=>"131-chile.svg","phone_code"=>"56","code2"=>"CL","code3"=>"CHL"], ["flag_id"=>151,"flag_name"=>"bosnia and herzegovina","flag_svg"=>"132-bosnia-and-herzegovina.svg","phone_code"=>"387","code2"=>"BA","code3"=>"BIH"], ["flag_id"=>152,"flag_name"=>"saudi arabia","flag_svg"=>"133-saudi-arabia.svg","phone_code"=>"966","code2"=>"SA","code3"=>"SAU"], ["flag_id"=>153,"flag_name"=>"liechtenstein","flag_svg"=>"134-liechtenstein.svg","phone_code"=>"423","code2"=>"LI","code3"=>"LIE"], ["flag_id"=>154,"flag_name"=>"belarus","flag_svg"=>"135-belarus.svg","phone_code"=>"375","code2"=>"BY","code3"=>"BLR"], ["flag_id"=>155,"flag_name"=>"iran","flag_svg"=>"136-iran.svg","phone_code"=>"98","code2"=>"IR","code3"=>"IRN"], ["flag_id"=>156,"flag_name"=>"fiji","flag_svg"=>"137-fiji.svg","phone_code"=>"679","code2"=>"FJ","code3"=>"FJI"], ["flag_id"=>157,"flag_name"=>"bahrain","flag_svg"=>"138-bahrain.svg","phone_code"=>"973","code2"=>"BH","code3"=>"BHR"], ["flag_id"=>158,"flag_name"=>"venezuela","flag_svg"=>"139-venezuela.svg","phone_code"=>"58","code2"=>"VE","code3"=>"VEN"], ["flag_id"=>159,"flag_name"=>"east timor","flag_svg"=>"140-east-timor.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>160,"flag_name"=>"azerbaijan","flag_svg"=>"141-azerbaijan.svg","phone_code"=>"994","code2"=>"AZ","code3"=>"AZE"], ["flag_id"=>161,"flag_name"=>"tibet","flag_svg"=>"142-tibet.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>162,"flag_name"=>"norway","flag_svg"=>"143-norway.svg","phone_code"=>"47","code2"=>"NO","code3"=>"NOR"], ["flag_id"=>163,"flag_name"=>"algeria","flag_svg"=>"144-algeria.svg","phone_code"=>"213","code2"=>"DZ","code3"=>"DZA"], ["flag_id"=>164,"flag_name"=>"ukraine","flag_svg"=>"145-ukraine.svg","phone_code"=>"380","code2"=>"UA","code3"=>"UKR"], ["flag_id"=>165,"flag_name"=>"gambia","flag_svg"=>"146-gambia.svg","phone_code"=>"220","code2"=>"GM","code3"=>"GMB"], ["flag_id"=>166,"flag_name"=>"bangladesh","flag_svg"=>"147-bangladesh.svg","phone_code"=>"880","code2"=>"BD","code3"=>"BGD"], ["flag_id"=>167,"flag_name"=>"madeira","flag_svg"=>"148-madeira.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>168,"flag_name"=>"czech republic","flag_svg"=>"149-czech-republic.svg","phone_code"=>"420","code2"=>"CZ","code3"=>"CZE"], ["flag_id"=>169,"flag_name"=>"bolivia","flag_svg"=>"150-bolivia.svg","phone_code"=>"591","code2"=>"BO","code3"=>"BOL"], ["flag_id"=>170,"flag_name"=>"united arab emirates","flag_svg"=>"151-united-arab-emirates.svg","phone_code"=>"971","code2"=>"AE","code3"=>"ARE"], ["flag_id"=>171,"flag_name"=>"kyrgyzstan","flag_svg"=>"152-kyrgyzstan.svg","phone_code"=>"996","code2"=>"KG","code3"=>"KGZ"], ["flag_id"=>172,"flag_name"=>"cuba","flag_svg"=>"153-cuba.svg","phone_code"=>"53","code2"=>"CU","code3"=>"CUB"], ["flag_id"=>173,"flag_name"=>"swaziland","flag_svg"=>"154-swaziland.svg","phone_code"=>"268","code2"=>"SZ","code3"=>"SWZ"], ["flag_id"=>174,"flag_name"=>"israel","flag_svg"=>"155-israel.svg","phone_code"=>"972","code2"=>"IL","code3"=>"ISR"], ["flag_id"=>175,"flag_name"=>"costa rica","flag_svg"=>"156-costa-rica.svg","phone_code"=>"506","code2"=>"CR","code3"=>"CRI"], ["flag_id"=>176,"flag_name"=>"republic of the congo","flag_svg"=>"157-republic-of-the-congo.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>177,"flag_name"=>"egypt","flag_svg"=>"158-egypt.svg","phone_code"=>"20","code2"=>"EG","code3"=>"EGY"], ["flag_id"=>178,"flag_name"=>"cambodia","flag_svg"=>"159-cambodia.svg","phone_code"=>"855","code2"=>"KH","code3"=>"KHM"], ["flag_id"=>179,"flag_name"=>"northern marianas islands","flag_svg"=>"160-northern-marianas-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>180,"flag_name"=>"ivory coast","flag_svg"=>"161-ivory-coast.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>181,"flag_name"=>"germany","flag_svg"=>"162-germany.svg","phone_code"=>"49","code2"=>"DE","code3"=>"DEU"], ["flag_id"=>182,"flag_name"=>"papua new guinea","flag_svg"=>"163-papua-new-guinea.svg","phone_code"=>"675","code2"=>"PG","code3"=>"PNG"], ["flag_id"=>183,"flag_name"=>"croatia","flag_svg"=>"164-croatia.svg","phone_code"=>"385","code2"=>"HR","code3"=>"HRV"], ["flag_id"=>184,"flag_name"=>"belgium","flag_svg"=>"165-belgium.svg","phone_code"=>"32","code2"=>"BE","code3"=>"BEL"], ["flag_id"=>185,"flag_name"=>"morocco","flag_svg"=>"166-morocco.svg","phone_code"=>"212","code2"=>"MA","code3"=>"MAR"], ["flag_id"=>186,"flag_name"=>"macao","flag_svg"=>"167-macao.svg","phone_code"=>"853","code2"=>"MO","code3"=>"MAC"], ["flag_id"=>187,"flag_name"=>"bulgaria","flag_svg"=>"168-bulgaria.svg","phone_code"=>"359","code2"=>"BG","code3"=>"BGR"], ["flag_id"=>188,"flag_name"=>"liberia","flag_svg"=>"169-liberia.svg","phone_code"=>"231","code2"=>"LR","code3"=>"LBR"], ["flag_id"=>189,"flag_name"=>"greece","flag_svg"=>"170-greece.svg","phone_code"=>"30","code2"=>"GR","code3"=>"GRC"], ["flag_id"=>190,"flag_name"=>"galapagos islands","flag_svg"=>"171-galapagos-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>191,"flag_name"=>"st lucia","flag_svg"=>"172-st-lucia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>192,"flag_name"=>"mali","flag_svg"=>"173-mali.svg","phone_code"=>"223","code2"=>"ML","code3"=>"MLI"], ["flag_id"=>193,"flag_name"=>"denmark","flag_svg"=>"174-denmark.svg","phone_code"=>"45","code2"=>"DK","code3"=>"DNK"], ["flag_id"=>194,"flag_name"=>"rapa nui","flag_svg"=>"175-rapa-nui.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>195,"flag_name"=>"lesotho","flag_svg"=>"176-lesotho.svg","phone_code"=>"266","code2"=>"LS","code3"=>"LSO"], ["flag_id"=>196,"flag_name"=>"colombia","flag_svg"=>"177-colombia.svg","phone_code"=>"57","code2"=>"CO","code3"=>"COL"], ["flag_id"=>197,"flag_name"=>"palau","flag_svg"=>"178-palau.svg","phone_code"=>"680","code2"=>"PW","code3"=>"PLW"], ["flag_id"=>198,"flag_name"=>"ireland","flag_svg"=>"179-ireland.svg","phone_code"=>"353","code2"=>"IE","code3"=>"IRL"], ["flag_id"=>199,"flag_name"=>"french polynesia","flag_svg"=>"180-french-polynesia.svg","phone_code"=>"689","code2"=>"PF","code3"=>"PYF"], ["flag_id"=>200,"flag_name"=>"trinidad and tobago","flag_svg"=>"181-trinidad-and-tobago.svg","phone_code"=>"1868","code2"=>"TT","code3"=>"TTO"], ["flag_id"=>201,"flag_name"=>"niue","flag_svg"=>"182-niue.svg","phone_code"=>"683","code2"=>"NU","code3"=>"NIU"], ["flag_id"=>202,"flag_name"=>"hong kong","flag_svg"=>"183-hong-kong.svg","phone_code"=>"852","code2"=>"HK","code3"=>"HKG"], ["flag_id"=>203,"flag_name"=>"sweden","flag_svg"=>"184-sweden.svg","phone_code"=>"46","code2"=>"SE","code3"=>"SWE"], ["flag_id"=>204,"flag_name"=>"haiti","flag_svg"=>"185-haiti.svg","phone_code"=>"509","code2"=>"HT","code3"=>"HTI"], ["flag_id"=>205,"flag_name"=>"dominica","flag_svg"=>"186-dominica.svg","phone_code"=>"1767","code2"=>"DM","code3"=>"DMA"], ["flag_id"=>206,"flag_name"=>"vanuatu","flag_svg"=>"187-vanuatu.svg","phone_code"=>"678","code2"=>"VU","code3"=>"VUT"], ["flag_id"=>207,"flag_name"=>"peru","flag_svg"=>"188-peru.svg","phone_code"=>"51","code2"=>"PE","code3"=>"PER"], ["flag_id"=>208,"flag_name"=>"equatorial guinea","flag_svg"=>"189-equatorial-guinea.svg","phone_code"=>"240","code2"=>"GQ","code3"=>"GNQ"], ["flag_id"=>209,"flag_name"=>"uzbekistn","flag_svg"=>"190-uzbekistn.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>210,"flag_name"=>"tonga","flag_svg"=>"191-tonga.svg","phone_code"=>"676","code2"=>"TO","code3"=>"TON"], ["flag_id"=>211,"flag_name"=>"philippines","flag_svg"=>"192-philippines.svg","phone_code"=>"63","code2"=>"PH","code3"=>"PHL"], ["flag_id"=>212,"flag_name"=>"norfolk island","flag_svg"=>"193-norfolk-island.svg","phone_code"=>"672","code2"=>"NF","code3"=>"NFK"], ["flag_id"=>213,"flag_name"=>"malta","flag_svg"=>"194-malta.svg","phone_code"=>"356","code2"=>"MT","code3"=>"MLT"], ["flag_id"=>214,"flag_name"=>"france","flag_svg"=>"195-france.svg","phone_code"=>"33","code2"=>"FR","code3"=>"FRA"], ["flag_id"=>215,"flag_name"=>"tajikistan","flag_svg"=>"196-tajikistan.svg","phone_code"=>"992","code2"=>"TJ","code3"=>"TJK"], ["flag_id"=>216,"flag_name"=>"melilla","flag_svg"=>"197-melilla.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>217,"flag_name"=>"argentina","flag_svg"=>"198-argentina.svg","phone_code"=>"54","code2"=>"AR","code3"=>"ARG"], ["flag_id"=>218,"flag_name"=>"sudan","flag_svg"=>"199-sudan.svg","phone_code"=>"249","code2"=>"SD","code3"=>"SDN"], ["flag_id"=>219,"flag_name"=>"south africa","flag_svg"=>"200-south-africa.svg","phone_code"=>"27","code2"=>"ZA","code3"=>"ZAF"], ["flag_id"=>220,"flag_name"=>"martinique","flag_svg"=>"201-martinique.svg","phone_code"=>"596","code2"=>"MQ","code3"=>"MTQ"], ["flag_id"=>221,"flag_name"=>"taiwan","flag_svg"=>"202-taiwan.svg","phone_code"=>"886","code2"=>"TW","code3"=>"TWN"], ["flag_id"=>222,"flag_name"=>"sahrawi arab democratic republic","flag_svg"=>"203-sahrawi-arab-democratic-republic.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>223,"flag_name"=>"guernsey","flag_svg"=>"204-guernsey.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>224,"flag_name"=>"switzerland","flag_svg"=>"205-switzerland.svg","phone_code"=>"41","code2"=>"CH","code3"=>"CHE"], ["flag_id"=>225,"flag_name"=>"rwanda","flag_svg"=>"206-rwanda.svg","phone_code"=>"250","code2"=>"RW","code3"=>"RWA"], ["flag_id"=>226,"flag_name"=>"guam","flag_svg"=>"207-guam.svg","phone_code"=>"1671","code2"=>"GU","code3"=>"GUM"], ["flag_id"=>227,"flag_name"=>"palestine","flag_svg"=>"208-palestine.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>228,"flag_name"=>"indonesia","flag_svg"=>"209-indonesia.svg","phone_code"=>"62","code2"=>"ID","code3"=>"IDN"], ["flag_id"=>229,"flag_name"=>"grenada","flag_svg"=>"210-grenada.svg","phone_code"=>"1473","code2"=>"GD","code3"=>"GRD"], ["flag_id"=>230,"flag_name"=>"poland","flag_svg"=>"211-poland.svg","phone_code"=>"48","code2"=>"PL","code3"=>"POL"], ["flag_id"=>231,"flag_name"=>"moldova","flag_svg"=>"212-moldova.svg","phone_code"=>"373","code2"=>"MD","code3"=>"MDA"], ["flag_id"=>232,"flag_name"=>"gibraltar","flag_svg"=>"213-gibraltar.svg","phone_code"=>"350","code2"=>"GI","code3"=>"GIB"], ["flag_id"=>233,"flag_name"=>"malawi","flag_svg"=>"214-malawi.svg","phone_code"=>"265","code2"=>"MW","code3"=>"MWI"], ["flag_id"=>234,"flag_name"=>"falkland islands","flag_svg"=>"215-falkland-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>235,"flag_name"=>"england","flag_svg"=>"216-england.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>236,"flag_name"=>"virgin islands","flag_svg"=>"217-virgin-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>237,"flag_name"=>"turkey","flag_svg"=>"218-turkey.svg","phone_code"=>"90","code2"=>"TR","code3"=>"TUR"], ["flag_id"=>238,"flag_name"=>"isle of man","flag_svg"=>"219-isle-of-man.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>239,"flag_name"=>"vietnam","flag_svg"=>"220-vietnam.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>240,"flag_name"=>"tuvalu","flag_svg"=>"221-tuvalu.svg","phone_code"=>"688","code2"=>"TV","code3"=>"TUV"], ["flag_id"=>241,"flag_name"=>"niger","flag_svg"=>"222-niger.svg","phone_code"=>"227","code2"=>"NE","code3"=>"NER"], ["flag_id"=>242,"flag_name"=>"turks and caicos","flag_svg"=>"223-turks-and-caicos.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>243,"flag_name"=>"portugal","flag_svg"=>"224-portugal.svg","phone_code"=>"351","code2"=>"PT","code3"=>"PRT"], ["flag_id"=>244,"flag_name"=>"maldives","flag_svg"=>"225-maldives.svg","phone_code"=>"960","code2"=>"MV","code3"=>"MDV"], ["flag_id"=>245,"flag_name"=>"united states","flag_svg"=>"226-united-states.svg","phone_code"=>"1","code2"=>"US","code3"=>"USA"], ["flag_id"=>246,"flag_name"=>"senegal","flag_svg"=>"227-senegal.svg","phone_code"=>"221","code2"=>"SN","code3"=>"SEN"], ["flag_id"=>247,"flag_name"=>"nauru","flag_svg"=>"228-nauru.svg","phone_code"=>"674","code2"=>"NR","code3"=>"NRU"], ["flag_id"=>248,"flag_name"=>"turkmenistan","flag_svg"=>"229-turkmenistan.svg","phone_code"=>"7370","code2"=>"TM","code3"=>"TKM"], ["flag_id"=>249,"flag_name"=>"singapore","flag_svg"=>"230-singapore.svg","phone_code"=>"65","code2"=>"SG","code3"=>"SGP"], ["flag_id"=>250,"flag_name"=>"libya","flag_svg"=>"231-libya.svg","phone_code"=>"218","code2"=>"LY","code3"=>"LBY"], ["flag_id"=>251,"flag_name"=>"yemen","flag_svg"=>"232-yemen.svg","phone_code"=>"967","code2"=>"YE","code3"=>"YEM"], ["flag_id"=>252,"flag_name"=>"transnistria","flag_svg"=>"233-transnistria.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>253,"flag_name"=>"australia","flag_svg"=>"234-australia.svg","phone_code"=>"61","code2"=>"AU","code3"=>"AUS"], ["flag_id"=>254,"flag_name"=>"tokelau","flag_svg"=>"235-tokelau.svg","phone_code"=>"690","code2"=>"TK","code3"=>"TKL"], ["flag_id"=>255,"flag_name"=>"republic of macedonia","flag_svg"=>"236-republic-of-macedonia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>256,"flag_name"=>"netherlands","flag_svg"=>"237-netherlands.svg","phone_code"=>"31","code2"=>"NL","code3"=>"NLD"], ["flag_id"=>257,"flag_name"=>"thailand","flag_svg"=>"238-thailand.svg","phone_code"=>"66","code2"=>"TH","code3"=>"THA"], ["flag_id"=>258,"flag_name"=>"montenegro","flag_svg"=>"239-montenegro.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>259,"flag_name"=>"azores islands","flag_svg"=>"240-azores-islands.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>260,"flag_name"=>"st vincent and the grenadines","flag_svg"=>"241-st-vincent-and-the-grenadines.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>261,"flag_name"=>"madagascar","flag_svg"=>"242-madagascar.svg","phone_code"=>"261","code2"=>"MG","code3"=>"MDG"], ["flag_id"=>262,"flag_name"=>"canada","flag_svg"=>"243-canada.svg","phone_code"=>"1","code2"=>"CA","code3"=>"CAN"], ["flag_id"=>263,"flag_name"=>"south sudan","flag_svg"=>"244-south-sudan.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>264,"flag_name"=>"jersey","flag_svg"=>"245-jersey.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>265,"flag_name"=>"india","flag_svg"=>"246-india.svg","phone_code"=>"91","code2"=>"IN","code3"=>"IND"], ["flag_id"=>266,"flag_name"=>"somaliland","flag_svg"=>"247-somaliland.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>267,"flag_name"=>"russia","flag_svg"=>"248-russia.svg","phone_code"=>"70","code2"=>"RU","code3"=>"RUS"], ["flag_id"=>268,"flag_name"=>"democratic republic of congo","flag_svg"=>"249-democratic-republic-of-congo.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>269,"flag_name"=>"sint eustatius","flag_svg"=>"250-sint-eustatius.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>270,"flag_name"=>"samoa","flag_svg"=>"251-samoa.svg","phone_code"=>"684","code2"=>"WS","code3"=>"WSM"], ["flag_id"=>271,"flag_name"=>"mexico","flag_svg"=>"252-mexico.svg","phone_code"=>"52","code2"=>"MX","code3"=>"MEX"], ["flag_id"=>272,"flag_name"=>"seychelles","flag_svg"=>"253-seychelles.svg","phone_code"=>"248","code2"=>"SC","code3"=>"SYC"], ["flag_id"=>273,"flag_name"=>"nato","flag_svg"=>"254-nato.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>274,"flag_name"=>"brazil","flag_svg"=>"255-brazil.svg","phone_code"=>"55","code2"=>"BR","code3"=>"BRA"], ["flag_id"=>275,"flag_name"=>"georgia","flag_svg"=>"256-georgia.svg","phone_code"=>"995","code2"=>"GE","code3"=>"GEO"], ["flag_id"=>276,"flag_name"=>"sardinia","flag_svg"=>"257-sardinia.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>277,"flag_name"=>"mongolia","flag_svg"=>"258-mongolia.svg","phone_code"=>"976","code2"=>"MN","code3"=>"MNG"], ["flag_id"=>278,"flag_name"=>"european union","flag_svg"=>"259-european-union.svg","phone_code"=>null,"code2"=>null,"code3"=>null], ["flag_id"=>279,"flag_name"=>"united kingdom","flag_svg"=>"260-united-kingdom.svg","phone_code"=>"44","code2"=>"GB","code3"=>"GBR"], ["flag_id"=>280,"flag_name"=>"kiribati","flag_svg"=>"261-kiribati.svg","phone_code"=>"686","code2"=>"KI","code3"=>"KIR"], ["flag_id"=>281,"flag_name"=>"hawaii","flag_svg"=>"262-hawaii.svg","phone_code"=>null,"code2"=>null,"code3"=>null]
        ]);
    }
}
