<?php 
    
    use PHPUnit\Framework\TestCase;
    use Lurique\ApiCep\Search;
    
    class SearchTest extends TestCase
    {
        /**
         * @dataProvider dadosTeste
         */
        public function testGetAddressFromZipCodeDefaultUsage(String $input, Array $resultadoEsperado){
            $resultado = new Search;
            $resultado = $resultado->getAddressFromZipCode($input);
            $this->assertEquals($resultadoEsperado, $resultado);
        }

        public function dadosTeste(){
            return [
                'Endereço Casa' => [
                    '53540010',
                    [
                       'cep' =>'53540-010',
                       'logradouro' =>'Avenida A',
                       'complemento' =>'',
                       'bairro' =>'Caetés II',
                       'localidade' =>'Abreu e Lima',
                       'uf' =>'PE',
                       'ibge' =>'2600054',
                       'gia' =>'',
                       'ddd' =>'81',
                       'siafi' =>'2631'
                    ]
                    
                ],
               'Endereço Vila Militar' => [
                    '53540110',
                    [
                        'cep' => '53540-110',
                        'logradouro' => 'Rua Nove',
                        'complemento' => '(Vl Militar)',
                        'bairro' => 'Caetés II',
                        'localidade' => 'Abreu e Lima',
                        'uf' => 'PE',
                        'ibge' => '2600054',
                        'gia' =>'',
                        'ddd' => '81',
                        'siafi' => '2631'  
                    ]
                ]
            ];
        }
    }