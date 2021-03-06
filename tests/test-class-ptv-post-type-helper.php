<?php
/**
 * Class PTV_Post_Type_Helper_Test
 *
 * @package PTV_FOR_WORDPRESS
 */

require_once( PTV_FOR_WORDPRESS_DIR . '/core/functions.php' );
require_once( PTV_FOR_WORDPRESS_DIR . '/lib/helpers/class-ptv-post-type-helper.php' );

/**
 * Sample test case.
 */
class Test_PTV_Post_Type_Helper extends WP_UnitTestCase {

	/**
	 * Test location channel
	 */
	function test_prepare_service() {

		$expected =
			array(
				'_ptv_id'                                             => 'fcaa5a92-3c04-4777-8378-7dafed8c2d1b',
				'_ptv_type'                                           => 'PermissionAndObligation',
				'_ptv_service_names_name'                             => 'Testipalvelu',
				'_ptv_service_names_alternate_name'                   => 'Vaihtoehtoinen nimi',
				'_ptv_service_charge_type'                            => 'Free',
				'_ptv_area_type'                                      => 'AreaType',
				'_ptv_areas|||0|value'                                => '_',
				'_ptv_areas|type|0|0|value'                           => 'Municipality',
				'_ptv_areas|municipalities|0|0|value'                 => '182',
				'_ptv_areas|municipalities|0|1|value'                 => '179',
				'_ptv_service_descriptions_service_user_instruction'  => 'Toimintaohjeet suomi',
				'_ptv_service_descriptions_description'               => 'Kuvaus suomi',
				'_ptv_service_descriptions_short_description'         => 'Tiivistelmä suomi',
				'_ptv_languages|||0|value'                            => 'fi',
				'_ptv_languages|||1|value'                            => 'sv',
				'taxonomies'                                          =>
					array(
						'ptv-service-classes'    =>
							array(
								0 =>
									array(
										'_ptv_name'          => 'Verotus ja julkinen talous',
										'_ptv_code'          => 'P14',
										'_ptv_ontology_type' => 'PTVL',
										'_ptv_uri'           => 'http://urn.fi/URN:NBN:fi:au:ptvl:v1126',
										'_ptv_parent_uri'    => '',
									),
								1 =>
									array(
										'_ptv_name'          => 'Työnantajan palvelut',
										'_ptv_code'          => 'P12',
										'_ptv_ontology_type' => 'PTVL',
										'_ptv_uri'           => 'http://urn.fi/URN:NBN:fi:au:ptvl:v1115',
										'_ptv_parent_uri'    => '',
									),
							),
						'ptv-ontology-terms'     =>
							array(
								0 =>
									array(
										'_ptv_name'          => 'yhteiskunnallinen muutos',
										'_ptv_code'          => '',
										'_ptv_ontology_type' => 'YSO',
										'_ptv_uri'           => 'http://www.yso.fi/onto/koko/p32475',
										'_ptv_parent_uri'    => 'http://www.yso.fi/onto/koko/p30670',
									),
								1 =>
									array(
										'_ptv_name'          => 'digitalisaatio',
										'_ptv_code'          => '',
										'_ptv_ontology_type' => 'YSO',
										'_ptv_uri'           => 'http://www.yso.fi/onto/koko/p34126',
										'_ptv_parent_uri'    => 'http://www.yso.fi/onto/koko/p32475',
									),
							),
						'ptv-target-groups'      =>
							array(
								0 =>
									array(
										'_ptv_name'          => 'Yritykset ja yhteisöt',
										'_ptv_code'          => 'KR2',
										'_ptv_ontology_type' => 'TARGETGROUP',
										'_ptv_uri'           => 'http://urn.fi/URN:NBN:fi:au:ptvl:v2008',
										'_ptv_parent_uri'    => '',
									),
							),
						'ptv-life-events'        =>
							array(
								0 =>
									array(
										'_ptv_name'          => 'Eläkkeelle siirtyminen',
										'_ptv_code'          => 'KE10',
										'_ptv_ontology_type' => 'LIFESITUATION',
										'_ptv_uri'           => 'http://urn.fi/URN:NBN:fi:au:ptvl:v3003',
										'_ptv_parent_uri'    => '',
									),
							),
						'ptv-industrial-classes' =>
							array(
								0 =>
									array(
										'_ptv_name'       => 'Tietojenkäsittely, palvelintilan vuokraus ja niihin liittyvät palvelut',
										'_ptv_code'       => '5',
										'_ptv_uri'        => 'http://www.stat.fi/meta/luokitukset/toimiala/001-2008/63110',
										'_ptv_parent_id'  => '7fa4b095-2cd8-46dc-874e-3bda40924952',
										'_ptv_parent_uri' => 'http://www.stat.fi/meta/luokitukset/toimiala/001-2008/6311',
									),
							),
					),
				'_ptv_requirements'                                   => 'Ehdot ja kriteerit suomi',
				'_ptv_service_channels_-_service_channel_id_0'        => '0f24be5a-6c87-4481-8aa7-b317e90e0109',
				'_ptv_service_channels_-_service_channel_id_1'        => '7b5157f4-b593-40db-aa3e-7166caa9de73',
				'_ptv_service_channels_-_service_channel_id_2'        => '8e2aa680-4299-49cd-93a8-32611fe526b9',
				'_ptv_service_channels_-_service_channel_id_3'        => 'ca4544de-7b81-4f99-9e98-83714a527b40',
				'_ptv_organizations|||0|value'                        => '_',
				'_ptv_organizations|additional_information|0|0|value' => 'Palvelun vastuutaho suomi',
				'_ptv_organizations|organization_id|0|0|value'        => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
				'_ptv_organizations|role_type|0|0|value'              => 'Responsible',
				'_ptv_organizations|provision_type|0|0|value'         => 'SelfProduced',
				'_ptv_organizations|||1|value'                        => '_',
				'_ptv_organizations|additional_information|1|0|value' => 'Tuottaja, itse tuotetut palvelut',
				'_ptv_organizations|organization_id|1|0|value'        => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
				'_ptv_organizations|role_type|1|0|value'              => 'Producer',
				'_ptv_organizations|provision_type|1|0|value'         => 'SelfProduced',
				'_ptv_organizations|||2|value'                        => '_',
				'_ptv_organizations|additional_information|2|0|value' => 'Palvelusetelipalvelut suomi',
				'_ptv_organizations|role_type|2|0|value'              => 'Producer',
				'_ptv_organizations|provision_type|2|0|value'         => 'VoucherServices',
				'_ptv_publishing_status'                              => 'Published',
			);

		$data = unserialize( 'O:11:"PTV_Service":1:{s:12:" * container";a:20:{s:2:"id";s:36:"fcaa5a92-3c04-4777-8378-7dafed8c2d1b";s:40:"statutory_service_general_description_id";N;s:4:"type";s:23:"PermissionAndObligation";s:13:"service_names";a:5:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:23:"Testipalvelu in english";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:12:"Testipalvelu";s:4:"type";s:4:"Name";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:19:"Vaihtoehtoinen nimi";s:4:"type";s:13:"AlternateName";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:30:"Vaihtoehtoinen nimi in english";s:4:"type";s:13:"AlternateName";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:22:"Testipalvelu ruotsiksi";s:4:"type";s:4:"Name";}}}s:19:"service_charge_type";s:4:"Free";s:9:"area_type";s:8:"AreaType";s:5:"areas";a:1:{i:0;O:8:"PTV_Area":1:{s:12:" * container";a:4:{s:4:"type";s:12:"Municipality";s:4:"code";N;s:4:"name";N;s:14:"municipalities";a:2:{i:0;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"182";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Jämsä";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Jämsä";s:8:"language";s:2:"sv";}}}}}i:1;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"179";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Jyväskylä";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Jyväskylä";s:8:"language";s:2:"sv";}}}}}}}}}s:20:"service_descriptions";a:9:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:17:"Kuvaus in english";s:4:"type";s:11:"Description";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:25:"Toimintaohjeet in english";s:4:"type";s:22:"ServiceUserInstruction";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:21:"Tiivistemä ruotsiksi";s:4:"type";s:16:"ShortDescription";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:24:"Toimintaohjeet ruotsiksi";s:4:"type";s:22:"ServiceUserInstruction";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:32:"Tiivistelmä in english language";s:4:"type";s:16:"ShortDescription";}}i:5;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:16:"Kuvaus ruotsiksi";s:4:"type";s:11:"Description";}}i:6;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:20:"Toimintaohjeet suomi";s:4:"type";s:22:"ServiceUserInstruction";}}i:7;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:12:"Kuvaus suomi";s:4:"type";s:11:"Description";}}i:8;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:18:"Tiivistelmä suomi";s:4:"type";s:16:"ShortDescription";}}}s:9:"languages";a:2:{i:0;s:2:"fi";i:1;s:2:"sv";}s:15:"service_classes";a:2:{i:0;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:26:"Verotus ja julkinen talous";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:33:"Beskattning och offentlig ekonomi";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:27:"Taxation and public finance";s:8:"language";s:2:"en";}}}s:4:"code";s:3:"P14";s:13:"ontology_type";s:4:"PTVL";s:3:"uri";s:38:"http://urn.fi/URN:NBN:fi:au:ptvl:v1126";s:9:"parent_id";N;s:10:"parent_uri";s:0:"";}}i:1;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:21:"Työnantajan palvelut";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"Arbetsgivares tjänster";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:17:"Employer services";s:8:"language";s:2:"en";}}}s:4:"code";s:3:"P12";s:13:"ontology_type";s:4:"PTVL";s:3:"uri";s:38:"http://urn.fi/URN:NBN:fi:au:ptvl:v1115";s:9:"parent_id";N;s:10:"parent_uri";s:0:"";}}}s:14:"ontology_terms";a:2:{i:0;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:21:"samhällsförändring";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:24:"yhteiskunnallinen muutos";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:15:"societal change";s:8:"language";s:2:"en";}}}s:4:"code";s:0:"";s:13:"ontology_type";s:3:"YSO";s:3:"uri";s:34:"http://www.yso.fi/onto/koko/p32475";s:9:"parent_id";N;s:10:"parent_uri";s:34:"http://www.yso.fi/onto/koko/p30670";}}i:1;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:14:"digitalisaatio";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:24:"digitalisering (process)";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:14:"digitalisation";s:8:"language";s:2:"en";}}}s:4:"code";s:0:"";s:13:"ontology_type";s:3:"YSO";s:3:"uri";s:34:"http://www.yso.fi/onto/koko/p34126";s:9:"parent_id";N;s:10:"parent_uri";s:34:"http://www.yso.fi/onto/koko/p32475";}}}s:13:"target_groups";a:1:{i:0;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:43:"Businesses and non-government organizations";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"Yritykset ja yhteisöt";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:20:"Företag och samfund";s:8:"language";s:2:"sv";}}}s:4:"code";s:3:"KR2";s:13:"ontology_type";s:11:"TARGETGROUP";s:3:"uri";s:38:"http://urn.fi/URN:NBN:fi:au:ptvl:v2008";s:9:"parent_id";N;s:10:"parent_uri";s:0:"";}}}s:11:"life_events";a:1:{i:0;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:6:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"Eläkkeelle siirtyminen";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:17:"Att gå i pension";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Retirement";s:8:"language";s:2:"en";}}i:3;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:17:"Att gå i pension";s:8:"language";s:2:"sv";}}i:4;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"Eläkkeelle siirtyminen";s:8:"language";s:2:"fi";}}i:5;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Retirement";s:8:"language";s:2:"en";}}}s:4:"code";s:4:"KE10";s:13:"ontology_type";s:13:"LIFESITUATION";s:3:"uri";s:38:"http://urn.fi/URN:NBN:fi:au:ptvl:v3003";s:9:"parent_id";N;s:10:"parent_uri";s:0:"";}}}s:18:"industrial_classes";a:1:{i:0;O:14:"PTV_Finto_Item":1:{s:12:" * container";a:6:{s:4:"name";a:4:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:72:"Tietojenkäsittely, palvelintilan vuokraus ja niihin liittyvät palvelut";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:72:"Tietojenkäsittely, palvelintilan vuokraus ja niihin liittyvät palvelut";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:47:"Data processing, hosting and related activities";s:8:"language";s:2:"en";}}i:3;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:28:"Databehandling, hosting o.d.";s:8:"language";s:2:"sv";}}}s:4:"code";s:1:"5";s:13:"ontology_type";N;s:3:"uri";s:59:"http://www.stat.fi/meta/luokitukset/toimiala/001-2008/63110";s:9:"parent_id";s:36:"7fa4b095-2cd8-46dc-874e-3bda40924952";s:10:"parent_uri";s:58:"http://www.stat.fi/meta/luokitukset/toimiala/001-2008/6311";}}}s:11:"legislation";a:0:{}s:8:"keywords";a:0:{}s:12:"requirements";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:29:"Ehdot ja kriteerit in english";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:24:"Ehdot ja kriteerit suomi";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:28:"Ehdot ja kriteerit ruotsiksi";s:8:"language";s:2:"sv";}}}s:16:"service_channels";a:4:{i:0;O:27:"PTV_Service_Service_Channel":1:{s:12:" * container";a:4:{s:18:"service_channel_id";s:36:"0f24be5a-6c87-4481-8aa7-b317e90e0109";s:11:"description";a:0:{}s:19:"service_charge_type";N;s:22:"digital_authorizations";a:0:{}}}i:1;O:27:"PTV_Service_Service_Channel":1:{s:12:" * container";a:4:{s:18:"service_channel_id";s:36:"7b5157f4-b593-40db-aa3e-7166caa9de73";s:11:"description";a:0:{}s:19:"service_charge_type";N;s:22:"digital_authorizations";a:0:{}}}i:2;O:27:"PTV_Service_Service_Channel":1:{s:12:" * container";a:4:{s:18:"service_channel_id";s:36:"8e2aa680-4299-49cd-93a8-32611fe526b9";s:11:"description";a:0:{}s:19:"service_charge_type";N;s:22:"digital_authorizations";a:0:{}}}i:3;O:27:"PTV_Service_Service_Channel":1:{s:12:" * container";a:4:{s:18:"service_channel_id";s:36:"ca4544de-7b81-4f99-9e98-83714a527b40";s:11:"description";a:0:{}s:19:"service_charge_type";N;s:22:"digital_authorizations";a:0:{}}}}s:13:"organizations";a:4:{i:0;O:24:"PTV_Service_Organization":1:{s:12:" * container";a:5:{s:22:"additional_information";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:26:"Palvelun vastuutaho ruotsi";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:32:"Vastuutahon lisätiedot englanti";s:8:"language";s:2:"en";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:25:"Palvelun vastuutaho suomi";s:8:"language";s:2:"fi";}}}s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:9:"role_type";s:11:"Responsible";s:14:"provision_type";s:12:"SelfProduced";s:9:"web_pages";N;}}i:1;O:24:"PTV_Service_Organization":1:{s:12:" * container";a:5:{s:22:"additional_information";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:24:"Palvelun tuottaja ruotsi";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:32:"Tuottaja, itse tuotetut palvelut";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:30:"Tuottajan lisätiedot englanti";s:8:"language";s:2:"en";}}}s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:9:"role_type";s:8:"Producer";s:14:"provision_type";s:12:"SelfProduced";s:9:"web_pages";N;}}i:2;O:24:"PTV_Service_Organization":1:{s:12:" * container";a:5:{s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:27:"Palvelusetelipalvelut suomi";s:8:"language";s:2:"fi";}}}s:15:"organization_id";N;s:9:"role_type";s:8:"Producer";s:14:"provision_type";s:15:"VoucherServices";s:9:"web_pages";a:0:{}}}i:3;O:24:"PTV_Service_Organization":1:{s:12:" * container";a:5:{s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:28:"Palvelusetelipalvelut ruotsi";s:8:"language";s:2:"sv";}}}s:15:"organization_id";N;s:9:"role_type";s:8:"Producer";s:14:"provision_type";s:15:"VoucherServices";s:9:"web_pages";a:0:{}}}}s:17:"publishing_status";s:9:"Published";}}' );

		$got = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}


	/**
	 * Test phone channel
	 */
	function test_prepare_phone_channel() {

		$expected = array(
			'_ptv_id'                                                => '0f24be5a-6c87-4481-8aa7-b317e90e0109',
			'_ptv_service_channel_type'                              => 'Phone',
			'_ptv_organization_id'                                   => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
			'_ptv_service_channel_names_name'                        => 'Puhelinasiointikanava',
			'_ptv_service_channel_descriptions_short_description'    => 'Puhelinasiointikanavan tiivistelmä',
			'_ptv_service_channel_descriptions_description'          => 'Puhelinasiointikanavan kuvausteksti',
			'_ptv_area_type'                                         => 'AreaType',
			'_ptv_areas|||0|value'                                   => '_',
			'_ptv_areas|type|0|0|value'                              => 'Municipality',
			'_ptv_areas|municipalities|0|0|value'                    => '211',
			'_ptv_areas|municipalities|0|1|value'                    => '214',
			'_ptv_areas|municipalities|0|2|value'                    => '005',
			'_ptv_areas|municipalities|0|3|value'                    => '009',
			'_ptv_areas|municipalities|0|4|value'                    => '213',
			'_ptv_phone_numbers|||0|value'                           => '_',
			'_ptv_phone_numbers|type|0|0|value'                      => 'Phone',
			'_ptv_phone_numbers|service_charge_type|0|0|value'       => 'Other',
			'_ptv_phone_numbers|charge_description|0|0|value'        => 'Puhelun hintatiedot',
			'_ptv_phone_numbers|is_finnish_service_number|0|0|value' => 1,
			'_ptv_phone_numbers|number|0|0|value'                    => '40123456789',
			'_ptv_phone_numbers|language|0|0|value'                  => 'fi',
			'_ptv_support_emails'                                    => 'noreply@example.com',
			'_ptv_languages|||0|value'                               => 'ar',
			'_ptv_web_pages|||0|value'                               => '_',
			'_ptv_web_pages|order_number|0|0|value'                  => '2',
			'_ptv_web_pages|url|0|0|value'                           => 'https:///www.example.com',
			'_ptv_web_pages|language|0|0|value'                      => 'fi',
			'_ptv_service_hours|||0|value'                           => '_',
			'_ptv_service_hours|service_hour_type|0|0|value'         => 'Standard',
			'_ptv_service_hours|is_closed|0|0|value'                 => 0,
			'_ptv_service_hours|valid_for_now|0|0|value'             => 1,
			'_ptv_service_hours|opening_hour|0|0|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:0|0|value'   => 'Monday',
			'_ptv_service_hours|opening_hour:day_to|0:0|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:0|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:0|0|value'         => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:0|0|value'   => 0,
			'_ptv_publishing_status'                                 => 'Published',
		);

		$data = unserialize( 'O:17:"PTV_Phone_Channel":1:{s:12:" * container";a:13:{s:2:"id";s:36:"0f24be5a-6c87-4481-8aa7-b317e90e0109";s:20:"service_channel_type";s:5:"Phone";s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:21:"service_channel_names";a:3:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:28:"Puhelinasiointikanava ruotsi";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:30:"Puhelinasiointikanava englanti";s:4:"type";s:4:"Name";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:21:"Puhelinasiointikanava";s:4:"type";s:4:"Name";}}}s:28:"service_channel_descriptions";a:6:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:35:"Puhelinasiointikanavan tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:38:"Puhelinasiointikanava kuvaus englanti.";s:4:"type";s:11:"Description";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:35:"Puhelinasiointikanavan kuvausteksti";s:4:"type";s:11:"Description";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:19:"Tiivistelmä ruotsi";s:4:"type";s:16:"ShortDescription";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:44:"Puhelinasiointikanava tiivistelmä englanti.";s:4:"type";s:16:"ShortDescription";}}i:5;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:13:"Kuvaus ruotsi";s:4:"type";s:11:"Description";}}}s:9:"area_type";s:8:"AreaType";s:5:"areas";a:1:{i:0;O:8:"PTV_Area":1:{s:12:" * container";a:4:{s:4:"type";s:12:"Municipality";s:4:"code";N;s:4:"name";N;s:14:"municipalities";a:5:{i:0;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"211";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Kangasala";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Kangasala";s:8:"language";s:2:"fi";}}}}}i:1;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"214";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:12:"Kankaanpää";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:12:"Kankaanpää";s:8:"language";s:2:"fi";}}}}}i:2;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"005";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alajärvi";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alajärvi";s:8:"language";s:2:"sv";}}}}}i:3;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"009";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alavieska";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alavieska";s:8:"language";s:2:"sv";}}}}}i:4;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"213";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Kangasniemi";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Kangasniemi";s:8:"language";s:2:"sv";}}}}}}}}}s:13:"phone_numbers";a:3:{i:0;O:23:"PTV_Phone_Channel_Phone":1:{s:12:" * container";a:7:{s:4:"type";s:5:"Phone";s:19:"service_charge_type";s:7:"Charged";s:18:"charge_description";s:0:"";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:10:"1234567890";s:8:"language";s:2:"en";}}i:1;O:23:"PTV_Phone_Channel_Phone":1:{s:12:" * container";a:7:{s:4:"type";s:5:"Phone";s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:19:"Puhelun hintatiedot";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:11:"40123456789";s:8:"language";s:2:"fi";}}i:2;O:23:"PTV_Phone_Channel_Phone":1:{s:12:" * container";a:7:{s:4:"type";s:5:"Phone";s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:32:"Maksullisuuden lisätieto ruotsi";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:11:"40123123123";s:8:"language";s:2:"sv";}}}s:14:"support_emails";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"noreply-en@example.com";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"noreply@example.com";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"support-sv@example.com";s:8:"language";s:2:"sv";}}}s:9:"languages";a:1:{i:0;s:2:"ar";}s:9:"web_pages";a:3:{i:0;O:30:"PTV_Web_Page_With_Order_Number":1:{s:12:" * container";a:4:{s:12:"order_number";s:1:"1";s:5:"value";N;s:3:"url";s:42:"https://www.example.com/puhelinasiointi-en";s:8:"language";s:2:"en";}}i:1;O:30:"PTV_Web_Page_With_Order_Number":1:{s:12:" * container";a:4:{s:12:"order_number";s:1:"3";s:5:"value";N;s:3:"url";s:31:"https://www.example.com/support";s:8:"language";s:2:"sv";}}i:2;O:30:"PTV_Web_Page_With_Order_Number":1:{s:12:" * container";a:4:{s:12:"order_number";s:1:"2";s:5:"value";N;s:3:"url";s:24:"https:///www.example.com";s:8:"language";s:2:"fi";}}}s:13:"service_hours";a:1:{i:0;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:8:"Standard";s:10:"valid_from";N;s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:1;s:22:"additional_information";a:0:{}s:12:"opening_hour";a:1:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Monday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}}}}}s:17:"publishing_status";s:9:"Published";}}' );

		$got = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}

	/**
	 * Test printable form channel
	 */
	function test_prepare_printable_form_channel() {

		$expected = array(
			'_ptv_id'                                                 => '8e2aa680-4299-49cd-93a8-32611fe526b9',
			'_ptv_service_channel_type'                               => 'PrintableForm',
			'_ptv_organization_id'                                    => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
			'_ptv_service_channel_names_name'                         => 'Lomake',
			'_ptv_service_channel_descriptions_short_description'     => 'Lomakkeen tiivistelmä',
			'_ptv_service_channel_descriptions_description'           => 'Lomakkeen kuvausteksti',
			'_ptv_area_type'                                          => 'AreaType',
			'_ptv_areas|||0|value'                                    => '_',
			'_ptv_areas|type|0|0|value'                               => 'Municipality',
			'_ptv_areas|municipalities|0|0|value'                     => '005',
			'_ptv_areas|municipalities|0|1|value'                     => '081',
			'_ptv_areas|municipalities|0|2|value'                     => '111',
			'_ptv_areas|municipalities|0|3|value'                     => '086',
			'_ptv_areas|municipalities|0|4|value'                     => '082',
			'_ptv_form_identifier'                                    => 'Lomaketunnnus-12345',
			'_ptv_form_receiver'                                      => 'Lomakkeen Vastaanottaja',
			'_ptv_delivery_address|||0|value'                         => '_',
			'_ptv_delivery_address|latitude|0|0|value'                => '6901630.613',
			'_ptv_delivery_address|longitude|0|0|value'               => '435487.114',
			'_ptv_delivery_address|coordinate_state|0|0|value'        => 'Ok',
			'_ptv_delivery_address|postal_code|0|0|value'             => '40100',
			'_ptv_delivery_address|post_office|0|0|value'             => 'JYVÄSKYLÄ',
			'_ptv_delivery_address|street_address|0|0|value'          => 'Piippukatu',
			'_ptv_delivery_address|street_number|0|0|value'           => '11',
			'_ptv_delivery_address|country|0|0|value'                 => 'FI',
			'_ptv_delivery_address|additional_informations|0|0|value' => 'Toimitustieto sanallisesti',
			'_ptv_channel_urls|||0|value'                             => '_',
			'_ptv_channel_urls|language|0|0|value'                    => 'fi',
			'_ptv_channel_urls|_value|0|0|value'                      => 'http://example.com/invalid.pdf',
			'_ptv_channel_urls|type|0|0|value'                        => 'PDF',
			'_ptv_channel_urls|||1|value'                             => '_',
			'_ptv_channel_urls|language|1|0|value'                    => 'fi',
			'_ptv_channel_urls|_value|1|0|value'                      => 'http://example.com/invalid.doc',
			'_ptv_channel_urls|type|1|0|value'                        => 'DOC',
			'_ptv_attachments|||0|value'                              => '_',
			'_ptv_attachments|name|0|0|value'                         => 'Liitteen nimi x',
			'_ptv_attachments|description|0|0|value'                  => 'Liite suomi',
			'_ptv_attachments|url|0|0|value'                          => 'https://www.example.com/form-fi.pdf',
			'_ptv_attachments|language|0|0|value'                     => 'fi',
			'_ptv_support_phones|||0|value'                           => '_',
			'_ptv_support_phones|service_charge_type|0|0|value'       => 'Other',
			'_ptv_support_phones|charge_description|0|0|value'        => 'Maksullisuuden lisätieto',
			'_ptv_support_phones|is_finnish_service_number|0|0|value' => 1,
			'_ptv_support_phones|number|0|0|value'                    => '020987654321',
			'_ptv_support_phones|language|0|0|value'                  => 'fi',
			'_ptv_support_phones|||1|value'                           => '_',
			'_ptv_support_phones|service_charge_type|1|0|value'       => 'Free',
			'_ptv_support_phones|charge_description|1|0|value'        => '',
			'_ptv_support_phones|prefix_number|1|0|value'             => '+358',
			'_ptv_support_phones|is_finnish_service_number|1|0|value' => 0,
			'_ptv_support_phones|number|1|0|value'                    => '409999999',
			'_ptv_support_phones|language|1|0|value'                  => 'fi',
			'_ptv_support_emails'                                     => 'noreply@example.com',
			'_ptv_publishing_status'                                  => 'Published',
		);

		$data = unserialize( 'O:26:"PTV_Printable_Form_Channel":1:{s:12:" * container";a:18:{s:2:"id";s:36:"8e2aa680-4299-49cd-93a8-32611fe526b9";s:20:"service_channel_type";s:13:"PrintableForm";s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:21:"service_channel_names";a:3:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:15:"Lomake englanti";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:13:"Lomake ruotsi";s:4:"type";s:4:"Name";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:6:"Lomake";s:4:"type";s:4:"Name";}}}s:28:"service_channel_descriptions";a:6:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:21:"Tiivistelmä englanti";s:4:"type";s:16:"ShortDescription";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:16:"Kuvaus ruotsiksi";s:4:"type";s:11:"Description";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:15:"Kuvaus englanti";s:4:"type";s:11:"Description";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:22:"Lomakkeen tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:32:"Tiivistelmä ruotsi tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:5;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:22:"Lomakkeen kuvausteksti";s:4:"type";s:11:"Description";}}}s:9:"area_type";s:8:"AreaType";s:5:"areas";a:1:{i:0;O:8:"PTV_Area":1:{s:12:" * container";a:4:{s:4:"type";s:12:"Municipality";s:4:"code";N;s:4:"name";N;s:14:"municipalities";a:5:{i:0;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"005";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alajärvi";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alajärvi";s:8:"language";s:2:"sv";}}}}}i:1;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"081";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Hartola";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Hartola";s:8:"language";s:2:"sv";}}}}}i:2;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"111";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Heinola";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Heinola";s:8:"language";s:2:"fi";}}}}}i:3;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"086";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Hausjärvi";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Hausjärvi";s:8:"language";s:2:"fi";}}}}}i:4;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"082";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Hattula";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:7:"Hattula";s:8:"language";s:2:"sv";}}}}}}}}}s:15:"form_identifier";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"Lomaketunnnus-12345";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"12345-sv";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"Lomaketunnnus-12345";s:8:"language";s:2:"en";}}}s:13:"form_receiver";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:20:"Vastaanottaja ruotsi";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"Lomakkeen Vastaanottaja";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"Lomakkeen vastaanottaja";s:8:"language";s:2:"en";}}}s:16:"delivery_address";O:28:"PTV_Address_With_Coordinates":1:{s:12:" * container";a:11:{s:8:"latitude";s:11:"6901630.613";s:9:"longitude";s:10:"435487.114";s:16:"coordinate_state";s:2:"Ok";s:15:"post_office_box";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:6:"PL 210";s:8:"language";s:2:"en";}}}s:11:"postal_code";s:5:"40100";s:11:"post_office";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"fi";}}}s:14:"street_address";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:13:"Piippukatu 11";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"Piippukatu englanti";s:8:"language";s:2:"en";}}}s:13:"street_number";s:2:"11";s:12:"municipality";N;s:7:"country";s:2:"FI";s:23:"additional_informations";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"Toimitustieto englanti";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:20:"Toimitustieto ruotsi";s:8:"language";s:2:"sv";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:26:"Toimitustieto sanallisesti";s:8:"language";s:2:"fi";}}}}}s:12:"channel_urls";a:4:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:35:"https://www.example.com/form-en.pdf";s:4:"type";s:3:"PDF";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:35:"https://www.example.com/file-sv.pdf";s:4:"type";s:3:"PDF";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:30:"http://example.com/invalid.pdf";s:4:"type";s:3:"PDF";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:30:"http://example.com/invalid.doc";s:4:"type";s:3:"DOC";}}}s:11:"attachments";a:3:{i:0;O:24:"PTV_Attachment_With_Type":1:{s:12:" * container";a:5:{s:4:"type";N;s:4:"name";s:15:"Liitteen nimi x";s:11:"description";s:11:"Liite suomi";s:3:"url";s:35:"https://www.example.com/form-fi.pdf";s:8:"language";s:2:"fi";}}i:1;O:24:"PTV_Attachment_With_Type":1:{s:12:" * container";a:5:{s:4:"type";N;s:4:"name";s:13:"Liitteen nimi";s:11:"description";s:12:"Liite ruotsi";s:3:"url";s:41:"https://www.example.com/attachment-sv.pdf";s:8:"language";s:2:"sv";}}i:2;O:24:"PTV_Attachment_With_Type":1:{s:12:" * container";a:5:{s:4:"type";N;s:4:"name";s:13:"Attachment en";s:11:"description";s:0:"";s:3:"url";s:41:"https://www.example.com/attachment-en.pdf";s:8:"language";s:2:"en";}}}s:14:"support_phones";a:5:{i:0;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:32:"Maksullisuuden lisätieto ruotsi";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:12:"040987654321";s:8:"language";s:2:"sv";}}i:1;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:20:"Maksullisuuden tieto";s:13:"prefix_number";s:4:"+358";s:25:"is_finnish_service_number";b:0;s:6:"number";s:11:"77777777777";s:8:"language";s:2:"sv";}}i:2;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:25:"Maksullisuuden lisätieto";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:12:"020987654321";s:8:"language";s:2:"fi";}}i:3;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:4:"Free";s:18:"charge_description";s:0:"";s:13:"prefix_number";s:4:"+358";s:25:"is_finnish_service_number";b:0;s:6:"number";s:9:"409999999";s:8:"language";s:2:"fi";}}i:4;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:10:"Lisätieto";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:9:"123456456";s:8:"language";s:2:"en";}}}s:14:"support_emails";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"noreply-sv@example.com";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"noreply@example.com";s:8:"language";s:2:"fi";}}}s:9:"languages";a:0:{}s:9:"web_pages";a:0:{}s:13:"service_hours";a:0:{}s:17:"publishing_status";s:9:"Published";}}' );
		$got  = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}

	/**
	 * Test electronic channel
	 */
	function test_prepare_echannel() {

		$expected = array(
			'_ptv_id'                                                 => '9f13b53d-41ff-4f2d-bfff-5fca3d860528',
			'_ptv_service_channel_type'                               => 'EChannel',
			'_ptv_organization_id'                                    => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
			'_ptv_service_channel_names_name'                         => 'Verkkoasiointi',
			'_ptv_service_channel_descriptions_description'           => 'Verkkoasioinnin kuvausteksti',
			'_ptv_service_channel_descriptions_short_description'     => 'Verkkoasioinnin tiivistelmä',
			'_ptv_area_type'                                          => 'AreaType',
			'_ptv_areas|||0|value'                                    => '_',
			'_ptv_areas|type|0|0|value'                               => 'Municipality',
			'_ptv_areas|municipalities|0|0|value'                     => '018',
			'_ptv_areas|municipalities|0|1|value'                     => '016',
			'_ptv_signature_quantity'                                 => '3',
			'_ptv_requires_signature'                                 => 1,
			'_ptv_requires_authentication'                            => 1,
			'_ptv_urls'                                               => 'https://www.example.com',
			'_ptv_attachments|||0|value'                              => '_',
			'_ptv_attachments|name|0|0|value'                         => 'Lisätietolinkin nimi',
			'_ptv_attachments|description|0|0|value'                  => 'Lisätietolinkin kuvaus',
			'_ptv_attachments|url|0|0|value'                          => 'https://www.example.com/lisatietoa/',
			'_ptv_attachments|language|0|0|value'                     => 'fi',
			'_ptv_support_phones|||0|value'                           => '_',
			'_ptv_support_phones|service_charge_type|0|0|value'       => 'Other',
			'_ptv_support_phones|charge_description|0|0|value'        => 'Muu maksu suomi',
			'_ptv_support_phones|is_finnish_service_number|0|0|value' => 1,
			'_ptv_support_phones|number|0|0|value'                    => '040123456789',
			'_ptv_support_phones|language|0|0|value'                  => 'fi',
			'_ptv_support_phones|||1|value'                           => '_',
			'_ptv_support_phones|service_charge_type|1|0|value'       => 'Other',
			'_ptv_support_phones|charge_description|1|0|value'        => 'Kuvaus suomi',
			'_ptv_support_phones|prefix_number|1|0|value'             => '+358',
			'_ptv_support_phones|is_finnish_service_number|1|0|value' => 0,
			'_ptv_support_phones|number|1|0|value'                    => '40987654321',
			'_ptv_support_phones|language|1|0|value'                  => 'fi',
			'_ptv_support_emails'                                     => 'noreply@example.com',
			'_ptv_service_hours|||0|value'                            => '_',
			'_ptv_service_hours|service_hour_type|0|0|value'          => 'Standard',
			'_ptv_service_hours|is_closed|0|0|value'                  => 0,
			'_ptv_service_hours|valid_for_now|0|0|value'              => 1,
			'_ptv_service_hours|additional_information|0|0|value'     => 'Normaalit palveluajat',
			'_ptv_service_hours|opening_hour|0|0|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:0|0|value'    => 'Saturday',
			'_ptv_service_hours|opening_hour:day_to|0:0|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:0|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:0|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:0|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|1|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:1|0|value'    => 'Sunday',
			'_ptv_service_hours|opening_hour:day_to|0:1|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:1|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:1|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:1|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|2|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:2|0|value'    => 'Monday',
			'_ptv_service_hours|opening_hour:day_to|0:2|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:2|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:2|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:2|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|3|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:3|0|value'    => 'Tuesday',
			'_ptv_service_hours|opening_hour:day_to|0:3|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:3|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:3|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:3|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|4|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:4|0|value'    => 'Wednesday',
			'_ptv_service_hours|opening_hour:day_to|0:4|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:4|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:4|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:4|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|5|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:5|0|value'    => 'Thursday',
			'_ptv_service_hours|opening_hour:day_to|0:5|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:5|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:5|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:5|0|value'    => 0,
			'_ptv_service_hours|opening_hour|0|6|value'               => '_',
			'_ptv_service_hours|opening_hour:day_from|0:6|0|value'    => 'Friday',
			'_ptv_service_hours|opening_hour:day_to|0:6|0|value'      => '',
			'_ptv_service_hours|opening_hour:from|0:6|0|value'        => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:6|0|value'          => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:6|0|value'    => 0,
			'_ptv_publishing_status'                                  => 'Published',
		);

		$data = unserialize( 'O:20:"PTV_EChannel_Channel":1:{s:12:" * container";a:18:{s:2:"id";s:36:"9f13b53d-41ff-4f2d-bfff-5fca3d860528";s:20:"service_channel_type";s:8:"EChannel";s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:21:"service_channel_names";a:2:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:14:"Verkkoasiointi";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:24:"Verkkoasiointi ruotsiksi";s:4:"type";s:4:"Name";}}}s:28:"service_channel_descriptions";a:4:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:38:"Verkkoasioinnin tiivistelmä ruotsiksi";s:4:"type";s:16:"ShortDescription";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:28:"Verkkoasioinnin kuvausteksti";s:4:"type";s:11:"Description";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:28:"Verkkoasioinnin tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:16:"Kuvaus ruotsiksi";s:4:"type";s:11:"Description";}}}s:9:"area_type";s:8:"AreaType";s:5:"areas";a:1:{i:0;O:8:"PTV_Area":1:{s:12:" * container";a:4:{s:4:"type";s:12:"Municipality";s:4:"code";N;s:4:"name";N;s:14:"municipalities";a:2:{i:0;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"018";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:6:"Askola";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:6:"Askola";s:8:"language";s:2:"sv";}}}}}i:1;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"016";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"Asikkala";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"Asikkala";s:8:"language";s:2:"sv";}}}}}}}}}s:18:"signature_quantity";i:3;s:18:"requires_signature";b:1;s:23:"requires_authentication";b:1;s:4:"urls";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:31:"https://www.example.com/ruotsi/";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:23:"https://www.example.com";s:8:"language";s:2:"fi";}}}s:11:"attachments";a:2:{i:0;O:24:"PTV_Attachment_With_Type":1:{s:12:" * container";a:5:{s:4:"type";N;s:4:"name";s:12:"Liite ruotsi";s:11:"description";s:15:"Liitteen kuvaus";s:3:"url";s:38:"https://www.example.com/attachment.pdf";s:8:"language";s:2:"sv";}}i:1;O:24:"PTV_Attachment_With_Type":1:{s:12:" * container";a:5:{s:4:"type";N;s:4:"name";s:21:"Lisätietolinkin nimi";s:11:"description";s:23:"Lisätietolinkin kuvaus";s:3:"url";s:35:"https://www.example.com/lisatietoa/";s:8:"language";s:2:"fi";}}}s:14:"support_phones";a:4:{i:0;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:16:"Muu maksu ruotsi";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:11:"04099999999";s:8:"language";s:2:"sv";}}i:1;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:13:"Kuvaus ruotsi";s:13:"prefix_number";s:4:"+358";s:25:"is_finnish_service_number";b:0;s:6:"number";s:11:"40123456789";s:8:"language";s:2:"sv";}}i:2;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:15:"Muu maksu suomi";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:12:"040123456789";s:8:"language";s:2:"fi";}}i:3;O:9:"PTV_Phone":1:{s:12:" * container";a:7:{s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:12:"Kuvaus suomi";s:13:"prefix_number";s:4:"+358";s:25:"is_finnish_service_number";b:0;s:6:"number";s:11:"40987654321";s:8:"language";s:2:"fi";}}}s:14:"support_emails";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"noreply-sv@example.com";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"noreply@example.com";s:8:"language";s:2:"fi";}}}s:9:"languages";a:0:{}s:9:"web_pages";a:0:{}s:13:"service_hours";a:1:{i:0;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:8:"Standard";s:10:"valid_from";N;s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:1;s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:21:"Normaalit palveluajat";s:8:"language";s:2:"fi";}}}s:12:"opening_hour";a:7:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:8:"Saturday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:1;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Sunday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:2;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Monday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:3;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:7:"Tuesday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:4;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:9:"Wednesday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:5;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:8:"Thursday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:6;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Friday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}}}}}s:17:"publishing_status";s:9:"Published";}}' );

		$got = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}

	/**
	 * Test service location channel
	 */
	function test_prepare_service_location_channel() {

		$expected = array(
			'_ptv_id'                                                => '7b5157f4-b593-40db-aa3e-7166caa9de73',
			'_ptv_service_channel_type'                              => 'ServiceLocation',
			'_ptv_organization_id'                                   => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
			'_ptv_service_channel_names_name'                        => 'Palvelupiste',
			'_ptv_service_channel_descriptions_short_description'    => 'Tiivistelmä suomeksi',
			'_ptv_service_channel_descriptions_description'          => 'Kuvaus suomeksi.',
			'_ptv_area_type'                                         => 'AreaType',
			'_ptv_areas|||0|value'                                   => '_',
			'_ptv_areas|type|0|0|value'                              => 'Municipality',
			'_ptv_areas|municipalities|0|0|value'                    => '091',
			'_ptv_areas|municipalities|0|1|value'                    => '016',
			'_ptv_areas|municipalities|0|2|value'                    => '179',
			'_ptv_areas|municipalities|0|3|value'                    => '009',
			'_ptv_phone_numbers|||0|value'                           => '_',
			'_ptv_phone_numbers|type|0|0|value'                      => 'Phone',
			'_ptv_phone_numbers|service_charge_type|0|0|value'       => 'Other',
			'_ptv_phone_numbers|charge_description|0|0|value'        => 'Maksullisuuden lisätieto suomi',
			'_ptv_phone_numbers|is_finnish_service_number|0|0|value' => 1,
			'_ptv_phone_numbers|number|0|0|value'                    => '1234568',
			'_ptv_phone_numbers|language|0|0|value'                  => 'fi',
			'_ptv_emails'                                            => 'noreply@example.com',
			'_ptv_languages|||0|value'                               => 'ar',
			'_ptv_languages|||1|value'                               => 'et',
			'_ptv_phone_service_charge'                              => 0,
			'_ptv_web_pages|||0|value'                               => '_',
			'_ptv_web_pages|order_number|0|0|value'                  => '0',
			'_ptv_web_pages|url|0|0|value'                           => 'https://www.example.com',
			'_ptv_web_pages|language|0|0|value'                      => 'fi',
			'_ptv_web_pages|||1|value'                               => '_',
			'_ptv_web_pages|order_number|1|0|value'                  => '1',
			'_ptv_web_pages|url|1|0|value'                           => 'https://palvelutietovaranto.trn.suomi.fi/',
			'_ptv_web_pages|language|1|0|value'                      => 'fi',
			'_ptv_addresses|||0|value'                               => '_',
			'_ptv_addresses|latitude|0|0|value'                      => '6901630.613',
			'_ptv_addresses|longitude|0|0|value'                     => '435487.114',
			'_ptv_addresses|coordinate_state|0|0|value'              => 'Ok',
			'_ptv_addresses|type|0|0|value'                          => 'Visiting',
			'_ptv_addresses|postal_code|0|0|value'                   => '40100',
			'_ptv_addresses|post_office|0|0|value'                   => 'JYVÄSKYLÄ',
			'_ptv_addresses|street_address|0|0|value'                => 'Piippukatu',
			'_ptv_addresses|street_number|0|0|value'                 => '11',
			'_ptv_addresses|country|0|0|value'                       => 'FI',
			'_ptv_addresses|additional_informations|0|0|value'       => 'Käyntiosoitteen lisätiedot suomi',
			'_ptv_addresses|||1|value'                               => '_',
			'_ptv_addresses|latitude|1|0|value'                      => '6901630.613',
			'_ptv_addresses|longitude|1|0|value'                     => '435487.114',
			'_ptv_addresses|coordinate_state|1|0|value'              => 'Ok',
			'_ptv_addresses|type|1|0|value'                          => 'Postal',
			'_ptv_addresses|postal_code|1|0|value'                   => '40100',
			'_ptv_addresses|post_office|1|0|value'                   => 'JYVÄSKYLÄ',
			'_ptv_addresses|street_address|1|0|value'                => 'Piippukatu',
			'_ptv_addresses|street_number|1|0|value'                 => '11',
			'_ptv_addresses|country|1|0|value'                       => 'FI',
			'_ptv_addresses|additional_informations|1|0|value'       => 'Postiosoitteen lisätiedot suomi',
			'_ptv_service_hours|||0|value'                           => '_',
			'_ptv_service_hours|service_hour_type|0|0|value'         => 'Standard',
			'_ptv_service_hours|is_closed|0|0|value'                 => 0,
			'_ptv_service_hours|valid_for_now|0|0|value'             => 1,
			'_ptv_service_hours|opening_hour|0|0|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:0|0|value'   => 'Monday',
			'_ptv_service_hours|opening_hour:day_to|0:0|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:0|0|value'       => '16:45:00',
			'_ptv_service_hours|opening_hour:to|0:0|0|value'         => '17:45:00',
			'_ptv_service_hours|opening_hour:is_extra|0:0|0|value'   => 1,
			'_ptv_service_hours|opening_hour|0|1|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:1|0|value'   => 'Friday',
			'_ptv_service_hours|opening_hour:day_to|0:1|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:1|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:1|0|value'         => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:1|0|value'   => 0,
			'_ptv_service_hours|opening_hour|0|2|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:2|0|value'   => 'Monday',
			'_ptv_service_hours|opening_hour:day_to|0:2|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:2|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:2|0|value'         => '17:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:2|0|value'   => 0,
			'_ptv_service_hours|opening_hour|0|3|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:3|0|value'   => 'Wednesday',
			'_ptv_service_hours|opening_hour:day_to|0:3|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:3|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:3|0|value'         => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:3|0|value'   => 0,
			'_ptv_service_hours|opening_hour|0|4|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:4|0|value'   => 'Tuesday',
			'_ptv_service_hours|opening_hour:day_to|0:4|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:4|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:4|0|value'         => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:4|0|value'   => 0,
			'_ptv_service_hours|opening_hour|0|5|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|0:5|0|value'   => 'Thursday',
			'_ptv_service_hours|opening_hour:day_to|0:5|0|value'     => '',
			'_ptv_service_hours|opening_hour:from|0:5|0|value'       => '08:00:00',
			'_ptv_service_hours|opening_hour:to|0:5|0|value'         => '16:00:00',
			'_ptv_service_hours|opening_hour:is_extra|0:5|0|value'   => 0,
			'_ptv_service_hours|||1|value'                           => '_',
			'_ptv_service_hours|service_hour_type|1|0|value'         => 'Special',
			'_ptv_service_hours|is_closed|1|0|value'                 => 0,
			'_ptv_service_hours|valid_for_now|1|0|value'             => 1,
			'_ptv_service_hours|opening_hour|1|0|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|1:0|0|value'   => 'Tuesday',
			'_ptv_service_hours|opening_hour:day_to|1:0|0|value'     => 'Thursday',
			'_ptv_service_hours|opening_hour:from|1:0|0|value'       => '00:15:00',
			'_ptv_service_hours|opening_hour:to|1:0|0|value'         => '4:45:00',
			'_ptv_service_hours|opening_hour:is_extra|1:0|0|value'   => 0,
			'_ptv_service_hours|||2|value'                           => '_',
			'_ptv_service_hours|service_hour_type|2|0|value'         => 'Special',
			'_ptv_service_hours|is_closed|2|0|value'                 => 0,
			'_ptv_service_hours|valid_for_now|2|0|value'             => 1,
			'_ptv_service_hours|opening_hour|2|0|value'              => '_',
			'_ptv_service_hours|opening_hour:day_from|2:0|0|value'   => 'Tuesday',
			'_ptv_service_hours|opening_hour:day_to|2:0|0|value'     => 'Wednesday',
			'_ptv_service_hours|opening_hour:from|2:0|0|value'       => '00:30:00',
			'_ptv_service_hours|opening_hour:to|2:0|0|value'         => '0:30:00',
			'_ptv_service_hours|opening_hour:is_extra|2:0|0|value'   => 0,
			'_ptv_service_hours|||3|value'                           => '_',
			'_ptv_service_hours|service_hour_type|3|0|value'         => 'Exception',
			'_ptv_service_hours|valid_from|3|0|value'                => '2017-03-15',
			'_ptv_service_hours|is_closed|3|0|value'                 => 0,
			'_ptv_service_hours|valid_for_now|3|0|value'             => 0,
			'_ptv_service_hours|additional_information|3|0|value'    => 'Toinen poikkeava',
			'_ptv_service_hours|opening_hour|3|0|value'              => '_',
			'_ptv_service_hours|opening_hour:from|3:0|0|value'       => '00:45:00',
			'_ptv_service_hours|opening_hour:to|3:0|0|value'         => '0:30:00',
			'_ptv_service_hours|opening_hour:is_extra|3:0|0|value'   => 0,
			'_ptv_service_hours|||4|value'                           => '_',
			'_ptv_service_hours|service_hour_type|4|0|value'         => 'Exception',
			'_ptv_service_hours|valid_from|4|0|value'                => '2017-03-31',
			'_ptv_service_hours|is_closed|4|0|value'                 => 1,
			'_ptv_service_hours|valid_for_now|4|0|value'             => 0,
			'_ptv_service_hours|additional_information|4|0|value'    => 'Poikkeava palveluaika',
			'_ptv_service_hours|opening_hour|4|0|value'              => '_',
			'_ptv_service_hours|opening_hour:from|4:0|0|value'       => '00:45:00',
			'_ptv_service_hours|opening_hour:to|4:0|0|value'         => '1:00:00',
			'_ptv_service_hours|opening_hour:is_extra|4:0|0|value'   => 0,
			'_ptv_publishing_status'                                 => 'Published',
		);

		$data = unserialize( 'O:28:"PTV_Service_Location_Channel":1:{s:12:" * container";a:15:{s:2:"id";s:36:"7b5157f4-b593-40db-aa3e-7166caa9de73";s:20:"service_channel_type";s:15:"ServiceLocation";s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:21:"service_channel_names";a:3:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:19:"Palvelupiste ruotsi";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:21:"Palvelupiste englanti";s:4:"type";s:4:"Name";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:12:"Palvelupiste";s:4:"type";s:4:"Name";}}}s:28:"service_channel_descriptions";a:6:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:34:"Palvelupiste englanti tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:13:"Kuvaus ruotsi";s:4:"type";s:11:"Description";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:21:"Tiivistelmä suomeksi";s:4:"type";s:16:"ShortDescription";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:16:"Kuvaus suomeksi.";s:4:"type";s:11:"Description";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:19:"Tiivistelmä ruotsi";s:4:"type";s:16:"ShortDescription";}}i:5;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:28:"Palvelupiste englanti kuvaus";s:4:"type";s:11:"Description";}}}s:9:"area_type";s:8:"AreaType";s:5:"areas";a:1:{i:0;O:8:"PTV_Area":1:{s:12:" * container";a:4:{s:4:"type";s:12:"Municipality";s:4:"code";N;s:4:"name";N;s:14:"municipalities";a:4:{i:0;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"091";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Helsingfors";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"Helsinki";s:8:"language";s:2:"fi";}}}}}i:1;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"016";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"Asikkala";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:8:"Asikkala";s:8:"language";s:2:"sv";}}}}}i:2;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"179";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Jyväskylä";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"Jyväskylä";s:8:"language";s:2:"sv";}}}}}i:3;O:16:"PTV_Municipality":1:{s:12:" * container";a:2:{s:4:"code";s:3:"009";s:4:"name";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alavieska";s:8:"language";s:2:"fi";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:9:"Alavieska";s:8:"language";s:2:"sv";}}}}}}}}}s:13:"phone_numbers";a:3:{i:0;O:19:"PTV_Phone_With_Type":1:{s:12:" * container";a:8:{s:4:"type";s:5:"Phone";s:22:"additional_information";N;s:19:"service_charge_type";s:7:"Charged";s:18:"charge_description";s:0:"";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:12:"040123123123";s:8:"language";s:2:"en";}}i:1;O:19:"PTV_Phone_With_Type":1:{s:12:" * container";a:8:{s:4:"type";s:5:"Phone";s:22:"additional_information";N;s:19:"service_charge_type";s:5:"Other";s:18:"charge_description";s:31:"Maksullisuuden lisätieto suomi";s:13:"prefix_number";N;s:25:"is_finnish_service_number";b:1;s:6:"number";s:7:"1234568";s:8:"language";s:2:"fi";}}i:2;O:19:"PTV_Phone_With_Type":1:{s:12:" * container";a:8:{s:4:"type";s:5:"Phone";s:22:"additional_information";N;s:19:"service_charge_type";s:7:"Charged";s:18:"charge_description";s:0:"";s:13:"prefix_number";s:4:"+358";s:25:"is_finnish_service_number";b:0;s:6:"number";s:12:"401234444444";s:8:"language";s:2:"sv";}}}s:6:"emails";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"noreply@example.com";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:19:"noreply@example.com";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:22:"noreply-sv@example.com";s:8:"language";s:2:"sv";}}}s:9:"languages";a:2:{i:0;s:2:"ar";i:1;s:2:"et";}s:20:"phone_service_charge";b:0;s:9:"web_pages";a:2:{i:0;O:30:"PTV_Web_Page_With_Order_Number":1:{s:12:" * container";a:4:{s:12:"order_number";s:1:"0";s:5:"value";N;s:3:"url";s:23:"https://www.example.com";s:8:"language";s:2:"fi";}}i:1;O:30:"PTV_Web_Page_With_Order_Number":1:{s:12:" * container";a:4:{s:12:"order_number";s:1:"1";s:5:"value";N;s:3:"url";s:41:"https://palvelutietovaranto.trn.suomi.fi/";s:8:"language";s:2:"fi";}}}s:9:"addresses";a:2:{i:0;O:37:"PTV_Address_With_Type_And_Coordinates":1:{s:12:" * container";a:12:{s:8:"latitude";s:11:"6901630.613";s:9:"longitude";s:10:"435487.114";s:16:"coordinate_state";s:2:"Ok";s:4:"type";s:8:"Visiting";s:15:"post_office_box";a:0:{}s:11:"postal_code";s:5:"40100";s:11:"post_office";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"fi";}}}s:14:"street_address";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"en";}}}s:13:"street_number";s:2:"11";s:12:"municipality";N;s:7:"country";s:2:"FI";s:23:"additional_informations";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:20:"Lisätiedot englanti";s:8:"language";s:2:"en";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:34:"Käyntiosoitteen lisätiedot suomi";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:35:"Käyntiosoitteen lisätiedot ruotsi";s:8:"language";s:2:"sv";}}}}}i:1;O:37:"PTV_Address_With_Type_And_Coordinates":1:{s:12:" * container";a:12:{s:8:"latitude";s:11:"6901630.613";s:9:"longitude";s:10:"435487.114";s:16:"coordinate_state";s:2:"Ok";s:4:"type";s:6:"Postal";s:15:"post_office_box";a:0:{}s:11:"postal_code";s:5:"40100";s:11:"post_office";a:2:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:11:"JYVÄSKYLÄ";s:8:"language";s:2:"fi";}}}s:14:"street_address";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"en";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:10:"Piippukatu";s:8:"language";s:2:"fi";}}}s:13:"street_number";s:2:"11";s:12:"municipality";N;s:7:"country";s:2:"FI";s:23:"additional_informations";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:33:"Postiosoitteen lisätiedot ruotsi";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:32:"Postiosoitteen lisätiedot suomi";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:20:"Lisätiedot englanti";s:8:"language";s:2:"en";}}}}}}s:13:"service_hours";a:5:{i:0;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:8:"Standard";s:10:"valid_from";N;s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:1;s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:18:"Lisätiedot ruotsi";s:8:"language";s:2:"sv";}}}s:12:"opening_hour";a:6:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Monday";s:6:"day_to";s:0:"";s:4:"from";s:8:"16:45:00";s:2:"to";s:8:"17:45:00";s:8:"is_extra";b:1;}}i:1;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Friday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:2;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:6:"Monday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"17:00:00";s:8:"is_extra";b:0;}}i:3;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:9:"Wednesday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:4;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:7:"Tuesday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}i:5;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:8:"Thursday";s:6:"day_to";s:0:"";s:4:"from";s:8:"08:00:00";s:2:"to";s:8:"16:00:00";s:8:"is_extra";b:0;}}}}}i:1;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:7:"Special";s:10:"valid_from";N;s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:1;s:22:"additional_information";a:0:{}s:12:"opening_hour";a:1:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:7:"Tuesday";s:6:"day_to";s:8:"Thursday";s:4:"from";s:8:"00:15:00";s:2:"to";s:7:"4:45:00";s:8:"is_extra";b:0;}}}}}i:2;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:7:"Special";s:10:"valid_from";N;s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:1;s:22:"additional_information";a:0:{}s:12:"opening_hour";a:1:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";s:7:"Tuesday";s:6:"day_to";s:9:"Wednesday";s:4:"from";s:8:"00:30:00";s:2:"to";s:7:"0:30:00";s:8:"is_extra";b:0;}}}}}i:3;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:9:"Exception";s:10:"valid_from";O:8:"DateTime":3:{s:4:"date";s:19:"2017-03-15 02:00:00";s:13:"timezone_type";i:1;s:8:"timezone";s:6:"+02:00";}s:8:"valid_to";N;s:9:"is_closed";b:0;s:13:"valid_for_now";b:0;s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:16:"Toinen poikkeava";s:8:"language";s:2:"fi";}}}s:12:"opening_hour";a:1:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";N;s:6:"day_to";N;s:4:"from";s:8:"00:45:00";s:2:"to";s:7:"0:30:00";s:8:"is_extra";b:0;}}}}}i:4;O:16:"PTV_Service_Hour":1:{s:12:" * container";a:7:{s:17:"service_hour_type";s:9:"Exception";s:10:"valid_from";O:8:"DateTime":3:{s:4:"date";s:19:"2017-03-31 03:00:00";s:13:"timezone_type";i:1;s:8:"timezone";s:6:"+03:00";}s:8:"valid_to";N;s:9:"is_closed";b:1;s:13:"valid_for_now";b:0;s:22:"additional_information";a:1:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:21:"Poikkeava palveluaika";s:8:"language";s:2:"fi";}}}s:12:"opening_hour";a:1:{i:0;O:22:"PTV_Daily_Opening_Time":1:{s:12:" * container";a:5:{s:8:"day_from";N;s:6:"day_to";N;s:4:"from";s:8:"00:45:00";s:2:"to";s:7:"1:00:00";s:8:"is_extra";b:0;}}}}}}s:17:"publishing_status";s:9:"Published";}}' );

		$got = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}

	/**
	 * Test web page channel
	 */
	function test_prepare_web_page_channel() {

		$expected = array(
			'_ptv_id'                                             => 'ca4544de-7b81-4f99-9e98-83714a527b40',
			'_ptv_service_channel_type'                           => 'WebPage',
			'_ptv_organization_id'                                => '5e7b2744-0bf5-4548-b8f3-af41397965e8',
			'_ptv_service_channel_names_name'                     => 'Verkkosivu',
			'_ptv_service_channel_descriptions_short_description' => 'Verkkosivun tiivistelmä',
			'_ptv_service_channel_descriptions_description'       => 'Verkkosivun kuvaus',
			'_ptv_urls'                                           => 'http://www.example.com/test-address',
			'_ptv_languages|||0|value'                            => 'am',
			'_ptv_languages|||1|value'                            => 'et',
			'_ptv_languages|||2|value'                            => 'fi',
			'_ptv_languages|||3|value'                            => 'ja',
			'_ptv_publishing_status'                              => 'Published',
		);

		$data = unserialize( 'O:20:"PTV_Web_Page_Channel":1:{s:12:" * container";a:12:{s:2:"id";s:36:"ca4544de-7b81-4f99-9e98-83714a527b40";s:20:"service_channel_type";s:7:"WebPage";s:15:"organization_id";s:36:"5e7b2744-0bf5-4548-b8f3-af41397965e8";s:21:"service_channel_names";a:3:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:20:"Valun sivut englanti";s:4:"type";s:4:"Name";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:10:"Verkkosivu";s:4:"type";s:4:"Name";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:17:"Verkkosivu ruotsi";s:4:"type";s:4:"Name";}}}s:28:"service_channel_descriptions";a:6:{i:0;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:15:"Kuvaus englanti";s:4:"type";s:11:"Description";}}i:1;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:25:"Verkkosivun kuvaus ruotsi";s:4:"type";s:11:"Description";}}i:2;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"sv";s:5:"value";s:31:"Verkkosivun tiivistelmä ruotsi";s:4:"type";s:16:"ShortDescription";}}i:3;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"en";s:5:"value";s:21:"Tiivistelmä englanti";s:4:"type";s:16:"ShortDescription";}}i:4;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:24:"Verkkosivun tiivistelmä";s:4:"type";s:16:"ShortDescription";}}i:5;O:23:"PTV_Localized_List_Item":1:{s:12:" * container";a:3:{s:8:"language";s:2:"fi";s:5:"value";s:18:"Verkkosivun kuvaus";s:4:"type";s:11:"Description";}}}s:4:"urls";a:3:{i:0;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:26:"http://www.example.com/sv/";s:8:"language";s:2:"sv";}}i:1;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:35:"http://www.example.com/test-address";s:8:"language";s:2:"fi";}}i:2;O:17:"PTV_Language_Item":1:{s:12:" * container";a:2:{s:5:"value";s:27:"https://www.example.com/en/";s:8:"language";s:2:"en";}}}s:14:"support_phones";a:0:{}s:14:"support_emails";a:0:{}s:9:"languages";a:4:{i:0;s:2:"am";i:1;s:2:"et";i:2;s:2:"fi";i:3;s:2:"ja";}s:9:"web_pages";a:0:{}s:13:"service_hours";a:0:{}s:17:"publishing_status";s:9:"Published";}}' );
		$got  = PTV_Post_Type_Helper::prepare( $data, 'fi' );

		// Replace this with some actual testing code.
		$this->assertEquals( $expected, $got );
	}

}
