<?php

namespace MGR\Googlon;

class GooglonHelperForTests {

	private const SCENARIO_01 = <<<TXT
shoce pq podciy nfwh phfer epgdc dgsloqe do rhfl qhmoixw cmfur qdrulxogji whc ermjdhsx py en yco
ienqm wjuln dwuch qinhmjul mjxdqfrnlg iygsex qihmu grewyluhfs ucf us xclpedqmi yrx qinexwo qx rqw
wxflpdn rsogxd cpqmxj lgchqdin fdw nwcrus coj nj qplfjnwidg fwdmslqn cwj hysucxdqm ms hdmwpe
igxweo sqflo ycqlinro ghu hgecdfj mw xrpmyenq fgixsr fpwcnguieh fclgj ghepqyd jxhwe cejfugn ujxqh
ihncrl mlceo udr fm ocxfsjdng sfoqmd pdoymnwxei spqinedf ql ncsepfl icmqsdj chwjlg yiq ifl syejrqd
lwnepmcg xlmnfqry ghlyopuncw qx iw sionpux cop dmqpchuyf ojxfqhernm ignpeyf rseoyl emjocsild
rfimdy mwd oewgjfr uo irmcunfgx ylduwpsnh xrdng gcxr ng prfmjicud srdueqhgiy nmodwsqijh dcnql
TXT;

	private const SCENARIO_02 = <<<TXT
dufqwh ndis eqclrnguo ceqrugs meod eofxlrd uqpwmni xrhm qgro hlwgimn fjnomcledi silruxh efwh
uxfrpsnqd fyejhi fxdn swfruc eopq hcgeox lhimoynsr rwjxecpmfl gimqxwuyr eujh rfs qncuyiel hwuiqlne
umyldn uwflpqc gywlc oxmegsdi sqemywlg cnfimrgows hnxyfd exmdnos djpsogiy xyp myngercj yeujqcoih
sgljco xy lruneodc frqog hqsgcy wmi hyfgqj iecusqjp ugnmqfypsd yp rxoew lqeshijndg umynehjsci rnc
xhrjyocde mnefpj rcyihwxq oihjwrup gquscxhw ucrfdsoeq drg nqhodjsm snp cwoen ehyldsnmf pmrs
cghuwpfxly ifwpnx wqdgrl xocpjedsfm oegli url rylnsph ijucmxw jwispgefdo heixgmcy gm sdhfnoxg hc
jqwpdo eo hmypjfu xuedl nqpge cnyosu dniefl lf xcdupho wixmhcuynj poy ous jwroheqm xchm jnufdshiqe
liyrexhmu cjlxoiquef fwqrijemcd csxpy eqxghfry fhnwomgyuq yj euhxmosc
TXT;

	private const SCENARIO_03 = <<<TXT
xerni hej meofh nowmfjhgur qsixdwp rwgfe xigldpnw nl jgnmqpesy dwh wiergnlpfj unei lgxidjs lyq pde ju
merwcxu xqgjeo iqfwyh rq xgdmopqhy qfderyjc lwrjsoynp miwlehxjcr xmry oncfipjg sgd dycjrflsn woyi lx
ousryfgcqp sxrhen gucfdpx edyn xngjhweodm xfujp lqyuch mr cjywmpuqns dfcugqws piuerlxhm cjh rgeoj
xucq impuhyec uhswgnpfj rl ngmwdeh ionxw uhisd dprhwqun yf gnepqwymuj wiylruxcqg fmnpo
wxcjemsuf wsijx nriy usqioe coeslhu ce chdo ydqsgjlhfn rihluydngf fq yrmejs xqcjwsdi prydlnc hxcl
ngrxcumijs sunrdwm urflyq jmcsorwglx gelnif esc ymfswnqij ifdn rfegusyj fw uinefd wsuxc lsjyndqgx
leginjo jiqwscle gdiusxecqj oufqgmjh dunw eyscgxulwn xfjdiy yodi rfhdclgo sngrmj wc rfd hfnjc yijf
yjurqsomp ogmycfqnrh gmuxsijo dqmyeugjlo
TXT;

	private const SCENARIO_04 = <<<TXT
fdmrsl lfro lxng cn jywenuqr mdgr pirfd puisec muf oupmifrn dr xyigmqwp cnomj unowmxiecd
odprsxwqge dyuhwxc ihpslwgoqm gwucos jcoer oelyg hmsp qenfdjrhcu csj fd ow jsuh oghqepxjlc jui
yupjenqmf jndfyqm qsdmjlf yghuecdj fhsogp hiwn neiwlogrsy ysw lcyehfi qd us oshnxrfpd ohx njdy yqwxn
osxjdqf qd somhefcix ofhledm ulrosdm gh dowueprmc pxryc smoxlwfnr pnciyrl us xjomhfe qlw jcfye
fcqlpoiu xeohlq mrsylhxwqf mxdplruge yumrfio cnyxdm xchidjpe fn cjupdxnefm ig icwgux qcfopnmey
ryshjxdc yricqxhfeo opdlfnhu rcpdlo oclmyr hpjfnlqy lnsdioe ojirm nfcmxjwgl wqphu eunyd eopi feru
hgwcms fu dmgxjholu ls owupc iw nxgupwhl udjnylie uewdymsl sypmcelu sup qdlhjmeno nrxu csiex
fuqrlid hmie fxgs nsjopuw
TXT;

	private const SCENARIO_05 = <<<TXT
mexfjsi yinjs ocmhp ms iyuq pqf qehcmrjpwu eorq gn mgnoqdjh odi nqeduhc cpgyx cjxdl uspxjgdlei jnqul
hpngdocxw wisly ndepfswml oux umrocw dje exsij sxwc icy wydjx eq sinprhlwdm hwmjp cndlxuqhfg
dimxwofheq phlyf qhiwfyudsp ey xwqmucp ec epqdonschm ipoufr syjqfr isxl mqgwclf ciex pysfieucx
oylfmierg hygu ch orl rjoh peqfw ljsf nqc hwsqc yrshie mwrpcg pxiomfqwrd rxsfecil goi ylnxequr jrcdiye
ojgelhisc fwerpnxogs gnl up yjgq hsfywx rnpjw lx qljs hjwsqel srhm mfginrqulc wpxgyh qugre mjrliogucs
iupdjfnhm muoplcrfi wxmyhipou umwrc hdroml irplxyofsm emnd ncjysiwdh cgr qrj qpngufxjli ufidryq
nsdohjim yqmgihus jimlxfsygc phdgqir yedhpws fqexsi xwule hgcmqix edmpwfnsuh fsxcerumow rijpsfgm
pmldxecqf ypwocmxni ywcr
TXT;

	private const EXPECTED_SCENARIO_01 = <<<TXT
sqflo spqinedf sfoqmd syejrqd shoce srdueqhgiy sionpux xclpedqmi xlmnfqry
xrpmyenq xrdng ocxfsjdng oewgjfr ojxfqhernm cop coj cmfur cwj cpqmxj chwjlg cejfugn qx qplfjnwidg
qhmoixw ql qdrulxogji qinhmjul qinexwo qihmu ncsepfl nmodwsqijh nwcrus nfwh nj ng ms mw mwd
mlceo mjxdqfrnlg wxflpdn whc wjuln podciy pq py phfer prfmjicud pdoymnwxei fclgj fm fwdmslqn
fpwcnguieh fdw fgixsr yco ycqlinro ylduwpsnh yrx yiq hysucxdqm hdmwpe hgecdfj en emjocsild epgdc
ermjdhsx lwnepmcg lgchqdin jxhwe rsogxd rseoyl rqw rfimdy rhfl do dcnql dmqpchuyf dwuch dgsloqe
gcxr ghepqyd ghlyopuncw ghu grewyluhfs us uo ucf ujxqh udr icmqsdj iw ifl iygsex ihncrl ienqm irmcunfgx
igxweo ignpeyf
TXT;

	private const EXPECTED_SCENARIO_02 = <<<TXT
sqemywlg snp swfruc sdhfnoxg sgljco silruxh xocpjedsfm xchm xcdupho xy xyp
xhrjyocde xrhm xuedl oxmegsdi oegli ous oihjwrup csxpy cnfimrgows cnyosu cwoen ceqrugs cjlxoiquef
cghuwpfxly qncuyiel qgro nqpge nqhodjsm ndis mnefpj myngercj meod wqdgrl wmi wixmhcuynj poy
pmrs fxdn fwqrijemcd fyejhi fhnwomgyuq fjnomcledi frqog yp yeujqcoih yj hc hcgeox hqsgcy hnxyfd
hmypjfu hwuiqlne hyfgqj heixgmcy hlwgimn exmdnos eo eopq eofxlrd eqxghfry eqclrnguo efwh
ehyldsnmf euhxmosc eujh lqeshijndg lf lhimoynsr lruneodc liyrexhmu jqwpdo jnufdshiqe jwroheqm
jwispgefdo rxoew rcyihwxq rnc rwjxecpmfl rfs rylnsph dniefl djpsogiy drg dufqwh gquscxhw gm gywlc
gimqxwuyr uxfrpsnqd ucrfdsoeq uqpwmni umynehjsci umyldn uwflpqc url ugnmqfypsd ifwpnx iecusqjp
ijucmxw
TXT;

	private const EXPECTED_SCENARIO_03 = <<<TXT
sxrhen sngrmj sgd sunrdwm xqcjwsdi xqgjeo xngjhweodm xmry xfjdiy xfujp xerni
xgdmopqhy xucq xigldpnw oncfipjg ogmycfqnrh ousryfgcqp oufqgmjh coeslhu chdo ce cjywmpuqns cjh
qsixdwp qfderyjc nowmfjhgur nl nriy ngmwdeh ngrxcumijs meofh merwcxu mr miwlehxjcr wsuxc wsijx
wxcjemsuf woyi wc wiylruxcqg wiergnlpfj prydlnc pde piuerlxhm fq fmnpo fw yodi ymfswnqij yf yjurqsomp
yrmejs ydqsgjlhfn yijf hxcl hfnjc hej esc eyscgxulwn edyn lsjyndqgx lx lqyuch lwrjsoynp lyq leginjo lgxidjs
jmcsorwglx jgnmqpesy ju jiqwscle rq rwgfe rfhdclgo rfegusyj rfd rl rgeoj rihluydngf dqmyeugjlo dwh
dprhwqun dfcugqws dycjrflsn dunw gnepqwymuj gmuxsijo gelnif gdiusxecqj gucfdpx usqioe unei
uhswgnpfj uhisd urflyq uinefd ionxw iqfwyh impuhyec ifdn
TXT;

	private const EXPECTED_SCENARIO_04 = <<<TXT
somhefcix smoxlwfnr sypmcelu sup xchidjpe xyigmqwp xeohlq xjomhfe osxjdqf
oshnxrfpd oclmyr ow owupc opdlfnhu ofhledm ohx oelyg ojirm odprsxwqge oghqepxjlc oupmifrn csj csiex
cn cnomj cnyxdm cjupdxnefm qsdmjlf qcfopnmey qenfdjrhcu qlw qd qdlhjmeno nsjopuw nxgupwhl
nfcmxjwgl neiwlogrsy njdy nrxu mxdplruge mrsylhxwqf mdgr muf wqphu pxryc pnciyrl puisec pirfd fxgs
fcqlpoiu fn fhsogp feru fd fdmrsl fu fuqrlid ysw yqwxn yricqxhfeo yghuecdj yumrfio yupjenqmf hmsp hmie
hpjfnlqy hgwcms hiwn eopi eunyd ls lxng lcyehfi lnsdioe lfro jsuh jcoer jcfye jndfyqm jywenuqr jui rcpdlo
ryshjxdc dowueprmc dmgxjholu dyuhwxc dr gwucos gh us unowmxiecd uewdymsl ulrosdm udjnylie
icwgux iw ihpslwgoqm ig
TXT;

	private const EXPECTED_SCENARIO_05 = <<<TXT
sxwc syjqfr srhm sinprhlwdm xwqmucp xwule ocmhp oylfmierg ojgelhisc orl odi oux
cndlxuqhfg cpgyx ch cjxdl cgr ciex qpngufxjli qhiwfyudsp qehcmrjpwu qljs qrj qugre nsdohjim ncjysiwdh
nqc nqeduhc ndepfswml ms mqgwclf mwrpcg mfginrqulc mexfjsi mjrliogucs mgnoqdjh muoplcrfi
wxmyhipou wpxgyh wydjx wisly pxiomfqwrd pqf pmldxecqf pysfieucx phlyf phdgqir peqfw fsxcerumow
fqexsi fwerpnxogs yqmgihus ywcr ypwocmxni yedhpws ylnxequr yjgq yrshie yinjs hsfywx hwsqc hwmjp
hpngdocxw hygu hjwsqel hdroml hgcmqix exsij eorq ec eq emnd epqdonschm ey edmpwfnsuh lx ljsf jnqul
jrcdiye jimlxfsygc rxsfecil rnpjw rjoh rijpsfgm dje dimxwofheq goi gn gnl uspxjgdlei umwrc umrocw up
ufidryq isxl icy ipoufr iyuq irplxyofsm iupdjfnhm
TXT;


	public static function getTestCase($testCase): string {
		$available_cases = [
			'TestCase_01' => self::SCENARIO_01,
			'TestCase_02' => self::SCENARIO_02,
			'TestCase_03' => self::SCENARIO_03,
			'TestCase_04' => self::SCENARIO_04,
			'TestCase_05' => self::SCENARIO_05,
		];

		return $available_cases[$testCase] ?: '';
	}

	public static function getExpectedTestCase(string $testCase): string {
		$available_cases = [
			'TestCase_01' => self::EXPECTED_SCENARIO_01,
			'TestCase_02' => self::EXPECTED_SCENARIO_02,
			'TestCase_03' => self::EXPECTED_SCENARIO_03,
			'TestCase_04' => self::EXPECTED_SCENARIO_04,
			'TestCase_05' => self::EXPECTED_SCENARIO_05,
		];
		return $available_cases[$testCase] ?: '';
	}


}
