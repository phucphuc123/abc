<?php

 isset($_CONFIG) or die('No direct access allowed.');

// ------------------------------------------------------------------------
// LOOKING GLASS CONFIGURATIONS
// ------------------------------------------------------------------------

/*
 * Your own AS number
 */
$_CONFIG['asn'] = '41095';

/*
 * Your own company name
 */
$_CONFIG['company'] = 'IPTP Networks';

/*
 * Your logo URL (or FALSE)
 */
$_CONFIG['logo'] = 'lg_logo.gif';

/*
 * Main style color
 */
$_CONFIG['color'] = '#E48559';

/*
 * Type of command to make a SSH connection (`plink' or `sshpass')
 */
$_CONFIG['sshcommand'] = 'sshpass';

/*
 * Putty `plink' command path (for SSH connections)
 */
// $_CONFIG['plink'] = '/usr/local/bin/plink-1.07-x86_64/plink';


/*
 * sshpass command path (for SSH connections)
 */

#$_CONFIG['sshpass'] = '/usr/local/sbin/sshpass';

$_CONFIG['sshpass'] = '/usr/bin/timeout 20 /usr/bin/unbuffer /usr/bin/sshpass';
#$_CONFIG['sshpass'] = '/usr/local/bin/_loopback';


/*
 * URL address of the IP whois service
 */
$_CONFIG['ipwhois'] = 'http://noc.hsdn.org/whois/';

/*
 * URL address of the AS whois service
 */
$_CONFIG['aswhois'] = 'http://noc.hsdn.org/aswhois/';

/**
 * Router nodes
 *
 * Parameters:
 *	url          - URL address in format: [ssh|telnet]://[login]:[password]@[host]:[port]
 *	pingtraceurl - URL address for ping and traceroute tools (or FALSE)
 *	description  - Node description
 *	group        - Node group name (of FALSE)
 *	ipv6         - Node is supports IPv6 (TRUE/FALSE)
 *	os           - Node OS (ios, mikrotik, quagga, junos)
 */
$_CONFIG['routers'] = array
(
	'6910e89f3d6f' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.nkf.ams.nl.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Amsterdam NIKHEF 0',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'4e1e1c4fb509' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.r328.nkf.ams.nl.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Amsterdam NIKHEF 1',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'b7648281d85e' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.nau.ath.gr.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Athens MedNautilus',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'f445252ea09c' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.107.dc5.ash.va.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Ashburn Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'527b861fc823' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.12.tlx.atl.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Atlanta Telx',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'89ad661f036e' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.322.ch4.eq.chi.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Chicago Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'053a71f8ca11' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.402.eq.dal.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Dallas Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'5311a81309c4' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.03.114.de1.den.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Denver Coresite',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'63d09bf27f7c' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.k3r8.fr5.fra.de.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Frankfurt Ancotel',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'147622d9971b' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.911.ntl.fra.de.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Frankfurt NewTelco',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'464596b9032f' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.101.eq.hk.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Hong Kong Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'd777b8ad099f' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r1.102.eq.hk.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Hong Kong Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'dcbf6860e5c5' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.409.mi.hk.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Hong Kong Mega-i',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'9efdce37e359' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.616.eq.sg.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Singapore SG1',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'cafb1f32c3fd' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.dc4.c17.jb1.sa.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Johannesburg JB1',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'4f67b6275021' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.r2116.ntl.kiev.ua.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Kiev NewTelco',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'16031335b484' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.101.k1.lim.cy.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Limassol, Cyprus',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'0ed4a67aa3a1' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.610.ld5.lnd.uk.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP London LD5',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'4b9b5972406f' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r1.1p19b.t2.lnd.uk.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP London TC2',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'58faa9239631' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.eq.la.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Los Angeles Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'd2e790e4e716' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.r51b4.ixn.mad.es.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Madrid ESpanix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'd26dde14bb9c' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.58.mix.mxp.it.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Milano MIX',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'644e04b90ce4' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.r03b15.2a03.ixn.mrs.fr.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Marseille Netcenter',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'07c93447dc61' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.2cr164.ter.mia.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Miami Terremark',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'295e29516e70' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.m1.m9.msk.ru.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Moscow M9 0',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'c82f80927c6e' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.m5.m9.msk.ru.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Moscow M9 1',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'02e719b7a5e1' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.c309.111.tlx.ny.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP New York 111 8th',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'f580379b163d' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.31b10b.th2.par.fr.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Paris TH2',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'b1f0a2d0bb65' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.85.800.wb.sea.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Seattle Westin Building',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'702cf933534e' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.a30.kx.sel.kr.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Seoul KINX Dogok',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'b4e827b20fd8' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.214.ty2.eq.jp.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Tokyo Equinix TY2',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'3d55e081024b' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.103.eq.tor.ca.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Toronto Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'98ec434ad083' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.ixn.zur.ch.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Zurich InterXion',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'14df915fe79a' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.121.1270.sv1.sjc.us.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP San Jose Equinix',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'7105b3bdf2b4' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.2317.ntr.sof.bg.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Sofia Neterra Teleport',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'18228f6a4bd5' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.f1k12.l3.lim.pe.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Peru Lima Level3',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'e17d0d895c01' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.f8.cmc.hcm.vn.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Vietnam Ho Chi Minh CMC',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
	'd599d0138034' => array (
		'url' => 'ssh://lg:%%$x9x309$%$2543n9836B%$@l100.r0.nxd1.buc.ro.iptp.net',
		'pingtraceurl' => FALSE,
		'description' => 'IPTP Bucharest Romania NXDATA1',
		'group' => 'AS41095',
		'ipv6' => TRUE,
		'os' => 'ios',
	),
);



/* End of file */
