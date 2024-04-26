<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = array(
            array('codigo' => '0101','descripcion' => 'Chachapoyas','departamento_codigo' => '01'),
            array('codigo' => '0102','descripcion' => 'Bagua','departamento_codigo' => '01'),
            array('codigo' => '0103','descripcion' => 'Bongará','departamento_codigo' => '01'),
            array('codigo' => '0104','descripcion' => 'Condorcanqui','departamento_codigo' => '01'),
            array('codigo' => '0105','descripcion' => 'Luya','departamento_codigo' => '01'),
            array('codigo' => '0106','descripcion' => 'Rodríguez de Mendoza','departamento_codigo' => '01'),
            array('codigo' => '0107','descripcion' => 'Utcubamba','departamento_codigo' => '01'),
            array('codigo' => '0201','descripcion' => 'Huaraz','departamento_codigo' => '02'),
            array('codigo' => '0202','descripcion' => 'Aija','departamento_codigo' => '02'),
            array('codigo' => '0203','descripcion' => 'Antonio Raymondi','departamento_codigo' => '02'),
            array('codigo' => '0204','descripcion' => 'Asunción','departamento_codigo' => '02'),
            array('codigo' => '0205','descripcion' => 'Bolognesi','departamento_codigo' => '02'),
            array('codigo' => '0206','descripcion' => 'Carhuaz','departamento_codigo' => '02'),
            array('codigo' => '0207','descripcion' => 'Carlos Fermín Fitzcarrald','departamento_codigo' => '02'),
            array('codigo' => '0208','descripcion' => 'Casma','departamento_codigo' => '02'),
            array('codigo' => '0209','descripcion' => 'Corongo','departamento_codigo' => '02'),
            array('codigo' => '0210','descripcion' => 'Huari','departamento_codigo' => '02'),
            array('codigo' => '0211','descripcion' => 'Huarmey','departamento_codigo' => '02'),
            array('codigo' => '0212','descripcion' => 'Huaylas','departamento_codigo' => '02'),
            array('codigo' => '0213','descripcion' => 'Mariscal Luzuriaga','departamento_codigo' => '02'),
            array('codigo' => '0214','descripcion' => 'Ocros','departamento_codigo' => '02'),
            array('codigo' => '0215','descripcion' => 'Pallasca','departamento_codigo' => '02'),
            array('codigo' => '0216','descripcion' => 'Pomabamba','departamento_codigo' => '02'),
            array('codigo' => '0217','descripcion' => 'Recuay','departamento_codigo' => '02'),
            array('codigo' => '0218','descripcion' => 'Santa','departamento_codigo' => '02'),
            array('codigo' => '0219','descripcion' => 'Sihuas','departamento_codigo' => '02'),
            array('codigo' => '0220','descripcion' => 'Yungay','departamento_codigo' => '02'),
            array('codigo' => '0301','descripcion' => 'Abancay','departamento_codigo' => '03'),
            array('codigo' => '0302','descripcion' => 'Andahuaylas','departamento_codigo' => '03'),
            array('codigo' => '0303','descripcion' => 'Antabamba','departamento_codigo' => '03'),
            array('codigo' => '0304','descripcion' => 'Aymaraes','departamento_codigo' => '03'),
            array('codigo' => '0305','descripcion' => 'Cotabambas','departamento_codigo' => '03'),
            array('codigo' => '0306','descripcion' => 'Chincheros','departamento_codigo' => '03'),
            array('codigo' => '0307','descripcion' => 'Grau','departamento_codigo' => '03'),
            array('codigo' => '0401','descripcion' => 'Arequipa','departamento_codigo' => '04'),
            array('codigo' => '0402','descripcion' => 'Camaná','departamento_codigo' => '04'),
            array('codigo' => '0403','descripcion' => 'Caravelí','departamento_codigo' => '04'),
            array('codigo' => '0404','descripcion' => 'Castilla','departamento_codigo' => '04'),
            array('codigo' => '0405','descripcion' => 'Caylloma','departamento_codigo' => '04'),
            array('codigo' => '0406','descripcion' => 'Condesuyos','departamento_codigo' => '04'),
            array('codigo' => '0407','descripcion' => 'Islay','departamento_codigo' => '04'),
            array('codigo' => '0408','descripcion' => 'La Uniòn','departamento_codigo' => '04'),
            array('codigo' => '0501','descripcion' => 'Huamanga','departamento_codigo' => '05'),
            array('codigo' => '0502','descripcion' => 'Cangallo','departamento_codigo' => '05'),
            array('codigo' => '0503','descripcion' => 'Huanca Sancos','departamento_codigo' => '05'),
            array('codigo' => '0504','descripcion' => 'Huanta','departamento_codigo' => '05'),
            array('codigo' => '0505','descripcion' => 'La Mar','departamento_codigo' => '05'),
            array('codigo' => '0506','descripcion' => 'Lucanas','departamento_codigo' => '05'),
            array('codigo' => '0507','descripcion' => 'Parinacochas','departamento_codigo' => '05'),
            array('codigo' => '0508','descripcion' => 'Pàucar del Sara Sara','departamento_codigo' => '05'),
            array('codigo' => '0509','descripcion' => 'Sucre','departamento_codigo' => '05'),
            array('codigo' => '0510','descripcion' => 'Víctor Fajardo','departamento_codigo' => '05'),
            array('codigo' => '0511','descripcion' => 'Vilcas Huamán','departamento_codigo' => '05'),
            array('codigo' => '0601','descripcion' => 'Cajamarca','departamento_codigo' => '06'),
            array('codigo' => '0602','descripcion' => 'Cajabamba','departamento_codigo' => '06'),
            array('codigo' => '0603','descripcion' => 'Celendín','departamento_codigo' => '06'),
            array('codigo' => '0604','descripcion' => 'Chota','departamento_codigo' => '06'),
            array('codigo' => '0605','descripcion' => 'Contumazá','departamento_codigo' => '06'),
            array('codigo' => '0606','descripcion' => 'Cutervo','departamento_codigo' => '06'),
            array('codigo' => '0607','descripcion' => 'Hualgayoc','departamento_codigo' => '06'),
            array('codigo' => '0608','descripcion' => 'Jaén','departamento_codigo' => '06'),
            array('codigo' => '0609','descripcion' => 'San Ignacio','departamento_codigo' => '06'),
            array('codigo' => '0610','descripcion' => 'San Marcos','departamento_codigo' => '06'),
            array('codigo' => '0611','descripcion' => 'San Miguel','departamento_codigo' => '06'),
            array('codigo' => '0612','descripcion' => 'San Pablo','departamento_codigo' => '06'),
            array('codigo' => '0613','descripcion' => 'Santa Cruz','departamento_codigo' => '06'),
            array('codigo' => '0701','descripcion' => 'Prov. Const. del Callao','departamento_codigo' => '07'),
            array('codigo' => '0801','descripcion' => 'Cusco','departamento_codigo' => '08'),
            array('codigo' => '0802','descripcion' => 'Acomayo','departamento_codigo' => '08'),
            array('codigo' => '0803','descripcion' => 'Anta','departamento_codigo' => '08'),
            array('codigo' => '0804','descripcion' => 'Calca','departamento_codigo' => '08'),
            array('codigo' => '0805','descripcion' => 'Canas','departamento_codigo' => '08'),
            array('codigo' => '0806','descripcion' => 'Canchis','departamento_codigo' => '08'),
            array('codigo' => '0807','descripcion' => 'Chumbivilcas','departamento_codigo' => '08'),
            array('codigo' => '0808','descripcion' => 'Espinar','departamento_codigo' => '08'),
            array('codigo' => '0809','descripcion' => 'La Convención','departamento_codigo' => '08'),
            array('codigo' => '0810','descripcion' => 'Paruro','departamento_codigo' => '08'),
            array('codigo' => '0811','descripcion' => 'Paucartambo','departamento_codigo' => '08'),
            array('codigo' => '0812','descripcion' => 'Quispicanchi','departamento_codigo' => '08'),
            array('codigo' => '0813','descripcion' => 'Urubamba','departamento_codigo' => '08'),
            array('codigo' => '0901','descripcion' => 'Huancavelica','departamento_codigo' => '09'),
            array('codigo' => '0902','descripcion' => 'Acobamba','departamento_codigo' => '09'),
            array('codigo' => '0903','descripcion' => 'Angaraes','departamento_codigo' => '09'),
            array('codigo' => '0904','descripcion' => 'Castrovirreyna','departamento_codigo' => '09'),
            array('codigo' => '0905','descripcion' => 'Churcampa','departamento_codigo' => '09'),
            array('codigo' => '0906','descripcion' => 'Huaytará','departamento_codigo' => '09'),
            array('codigo' => '0907','descripcion' => 'Tayacaja','departamento_codigo' => '09'),
            array('codigo' => '1001','descripcion' => 'Huánuco','departamento_codigo' => '10'),
            array('codigo' => '1002','descripcion' => 'Ambo','departamento_codigo' => '10'),
            array('codigo' => '1003','descripcion' => 'Dos de Mayo','departamento_codigo' => '10'),
            array('codigo' => '1004','descripcion' => 'Huacaybamba','departamento_codigo' => '10'),
            array('codigo' => '1005','descripcion' => 'Huamalíes','departamento_codigo' => '10'),
            array('codigo' => '1006','descripcion' => 'Leoncio Prado','departamento_codigo' => '10'),
            array('codigo' => '1007','descripcion' => 'Marañón','departamento_codigo' => '10'),
            array('codigo' => '1008','descripcion' => 'Pachitea','departamento_codigo' => '10'),
            array('codigo' => '1009','descripcion' => 'Puerto Inca','departamento_codigo' => '10'),
            array('codigo' => '1010','descripcion' => 'Lauricocha ','departamento_codigo' => '10'),
            array('codigo' => '1011','descripcion' => 'Yarowilca ','departamento_codigo' => '10'),
            array('codigo' => '1101','descripcion' => 'Ica ','departamento_codigo' => '11'),
            array('codigo' => '1102','descripcion' => 'Chincha ','departamento_codigo' => '11'),
            array('codigo' => '1103','descripcion' => 'Nasca ','departamento_codigo' => '11'),
            array('codigo' => '1104','descripcion' => 'Palpa ','departamento_codigo' => '11'),
            array('codigo' => '1105','descripcion' => 'Pisco ','departamento_codigo' => '11'),
            array('codigo' => '1201','descripcion' => 'Huancayo ','departamento_codigo' => '12'),
            array('codigo' => '1202','descripcion' => 'Concepción ','departamento_codigo' => '12'),
            array('codigo' => '1203','descripcion' => 'Chanchamayo ','departamento_codigo' => '12'),
            array('codigo' => '1204','descripcion' => 'Jauja ','departamento_codigo' => '12'),
            array('codigo' => '1205','descripcion' => 'Junín ','departamento_codigo' => '12'),
            array('codigo' => '1206','descripcion' => 'Satipo ','departamento_codigo' => '12'),
            array('codigo' => '1207','descripcion' => 'Tarma ','departamento_codigo' => '12'),
            array('codigo' => '1208','descripcion' => 'Yauli ','departamento_codigo' => '12'),
            array('codigo' => '1209','descripcion' => 'Chupaca ','departamento_codigo' => '12'),
            array('codigo' => '1301','descripcion' => 'Trujillo ','departamento_codigo' => '13'),
            array('codigo' => '1302','descripcion' => 'Ascope ','departamento_codigo' => '13'),
            array('codigo' => '1303','descripcion' => 'Bolívar ','departamento_codigo' => '13'),
            array('codigo' => '1304','descripcion' => 'Chepén ','departamento_codigo' => '13'),
            array('codigo' => '1305','descripcion' => 'Julcán ','departamento_codigo' => '13'),
            array('codigo' => '1306','descripcion' => 'Otuzco ','departamento_codigo' => '13'),
            array('codigo' => '1307','descripcion' => 'Pacasmayo ','departamento_codigo' => '13'),
            array('codigo' => '1308','descripcion' => 'Pataz ','departamento_codigo' => '13'),
            array('codigo' => '1309','descripcion' => 'Sánchez Carrión ','departamento_codigo' => '13'),
            array('codigo' => '1310','descripcion' => 'Santiago de Chuco ','departamento_codigo' => '13'),
            array('codigo' => '1311','descripcion' => 'Gran Chimú ','departamento_codigo' => '13'),
            array('codigo' => '1312','descripcion' => 'Virú ','departamento_codigo' => '13'),
            array('codigo' => '1401','descripcion' => 'Chiclayo ','departamento_codigo' => '14'),
            array('codigo' => '1402','descripcion' => 'Ferreñafe ','departamento_codigo' => '14'),
            array('codigo' => '1403','descripcion' => 'Lambayeque ','departamento_codigo' => '14'),
            array('codigo' => '1501','descripcion' => 'Lima ','departamento_codigo' => '15'),
            array('codigo' => '1502','descripcion' => 'Barranca ','departamento_codigo' => '15'),
            array('codigo' => '1503','descripcion' => 'Cajatambo ','departamento_codigo' => '15'),
            array('codigo' => '1504','descripcion' => 'Canta ','departamento_codigo' => '15'),
            array('codigo' => '1505','descripcion' => 'Cañete ','departamento_codigo' => '15'),
            array('codigo' => '1506','descripcion' => 'Huaral ','departamento_codigo' => '15'),
            array('codigo' => '1507','descripcion' => 'Huarochirí ','departamento_codigo' => '15'),
            array('codigo' => '1508','descripcion' => 'Huaura ','departamento_codigo' => '15'),
            array('codigo' => '1509','descripcion' => 'Oyón ','departamento_codigo' => '15'),
            array('codigo' => '1510','descripcion' => 'Yauyos ','departamento_codigo' => '15'),
            array('codigo' => '1601','descripcion' => 'Maynas ','departamento_codigo' => '16'),
            array('codigo' => '1602','descripcion' => 'Alto Amazonas ','departamento_codigo' => '16'),
            array('codigo' => '1603','descripcion' => 'Loreto ','departamento_codigo' => '16'),
            array('codigo' => '1604','descripcion' => 'Mariscal Ramón Castilla ','departamento_codigo' => '16'),
            array('codigo' => '1605','descripcion' => 'Requena ','departamento_codigo' => '16'),
            array('codigo' => '1606','descripcion' => 'Ucayali ','departamento_codigo' => '16'),
            array('codigo' => '1607','descripcion' => 'Datem del Marañón ','departamento_codigo' => '16'),
            array('codigo' => '1608','descripcion' => 'Putumayo','departamento_codigo' => '16'),
            array('codigo' => '1701','descripcion' => 'Tambopata ','departamento_codigo' => '17'),
            array('codigo' => '1702','descripcion' => 'Manu ','departamento_codigo' => '17'),
            array('codigo' => '1703','descripcion' => 'Tahuamanu ','departamento_codigo' => '17'),
            array('codigo' => '1801','descripcion' => 'Mariscal Nieto ','departamento_codigo' => '18'),
            array('codigo' => '1802','descripcion' => 'General Sánchez Cerro ','departamento_codigo' => '18'),
            array('codigo' => '1803','descripcion' => 'Ilo ','departamento_codigo' => '18'),
            array('codigo' => '1901','descripcion' => 'Pasco ','departamento_codigo' => '19'),
            array('codigo' => '1902','descripcion' => 'Daniel Alccodigoes Carrión ','departamento_codigo' => '19'),
            array('codigo' => '1903','descripcion' => 'Oxapampa ','departamento_codigo' => '19'),
            array('codigo' => '2001','descripcion' => 'Piura ','departamento_codigo' => '20'),
            array('codigo' => '2002','descripcion' => 'Ayabaca ','departamento_codigo' => '20'),
            array('codigo' => '2003','descripcion' => 'Huancabamba ','departamento_codigo' => '20'),
            array('codigo' => '2004','descripcion' => 'Morropón ','departamento_codigo' => '20'),
            array('codigo' => '2005','descripcion' => 'Paita ','departamento_codigo' => '20'),
            array('codigo' => '2006','descripcion' => 'Sullana ','departamento_codigo' => '20'),
            array('codigo' => '2007','descripcion' => 'Talara ','departamento_codigo' => '20'),
            array('codigo' => '2008','descripcion' => 'Sechura ','departamento_codigo' => '20'),
            array('codigo' => '2101','descripcion' => 'Puno ','departamento_codigo' => '21'),
            array('codigo' => '2102','descripcion' => 'Azángaro ','departamento_codigo' => '21'),
            array('codigo' => '2103','descripcion' => 'Carabaya ','departamento_codigo' => '21'),
            array('codigo' => '2104','descripcion' => 'Chucuito ','departamento_codigo' => '21'),
            array('codigo' => '2105','descripcion' => 'El Collao ','departamento_codigo' => '21'),
            array('codigo' => '2106','descripcion' => 'Huancané ','departamento_codigo' => '21'),
            array('codigo' => '2107','descripcion' => 'Lampa ','departamento_codigo' => '21'),
            array('codigo' => '2108','descripcion' => 'Melgar ','departamento_codigo' => '21'),
            array('codigo' => '2109','descripcion' => 'Moho ','departamento_codigo' => '21'),
            array('codigo' => '2110','descripcion' => 'San Antonio de Putina ','departamento_codigo' => '21'),
            array('codigo' => '2111','descripcion' => 'San Román ','departamento_codigo' => '21'),
            array('codigo' => '2112','descripcion' => 'Sandia ','departamento_codigo' => '21'),
            array('codigo' => '2113','descripcion' => 'Yunguyo ','departamento_codigo' => '21'),
            array('codigo' => '2201','descripcion' => 'Moyobamba ','departamento_codigo' => '22'),
            array('codigo' => '2202','descripcion' => 'Bellavista ','departamento_codigo' => '22'),
            array('codigo' => '2203','descripcion' => 'El Dorado ','departamento_codigo' => '22'),
            array('codigo' => '2204','descripcion' => 'Huallaga ','departamento_codigo' => '22'),
            array('codigo' => '2205','descripcion' => 'Lamas ','departamento_codigo' => '22'),
            array('codigo' => '2206','descripcion' => 'Mariscal Cáceres ','departamento_codigo' => '22'),
            array('codigo' => '2207','descripcion' => 'Picota ','departamento_codigo' => '22'),
            array('codigo' => '2208','descripcion' => 'Rioja ','departamento_codigo' => '22'),
            array('codigo' => '2209','descripcion' => 'San Martin ','departamento_codigo' => '22'),
            array('codigo' => '2210','descripcion' => 'Tocache ','departamento_codigo' => '22'),
            array('codigo' => '2301','descripcion' => 'Tacna ','departamento_codigo' => '23'),
            array('codigo' => '2302','descripcion' => 'Candarave ','departamento_codigo' => '23'),
            array('codigo' => '2303','descripcion' => 'Jorge Basadre ','departamento_codigo' => '23'),
            array('codigo' => '2304','descripcion' => 'Tarata ','departamento_codigo' => '23'),
            array('codigo' => '2401','descripcion' => 'Tumbes ','departamento_codigo' => '24'),
            array('codigo' => '2402','descripcion' => 'Contralmirante Villar ','departamento_codigo' => '24'),
            array('codigo' => '2403','descripcion' => 'Zarumilla ','departamento_codigo' => '24'),
            array('codigo' => '2501','descripcion' => 'Coronel Portillo ','departamento_codigo' => '25'),
            array('codigo' => '2502','descripcion' => 'Atalaya ','departamento_codigo' => '25'),
            array('codigo' => '2503','descripcion' => 'Padre Abad ','departamento_codigo' => '25'),
            array('codigo' => '2504','descripcion' => 'Purús','departamento_codigo' => '25')
        );

        foreach($provinces as $province)
        {
            $new_province = new \App\Models\Province();
            foreach($province as $key => $value)
            {
                $new_province->{$key}  = $value;
            }

            $new_province->save();
        }
    }
}