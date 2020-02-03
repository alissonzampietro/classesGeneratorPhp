<?php

$modules = ['Class1','Class2', 'Class3'];

$path = 'C:\\dev\\Project\\';
// $path = 'C:\\dev\\classGenerator\\result\\';

foreach($modules as $item) {
	$str = <<<EOF
<?php

namespace Your\Namespace;

class {$item}Service extends OutageService {

    public function __consruct() {
        parent::__construct();
    }

    /**
     * Create {$item}
     * 
     * @param array \$payload
     * 
     * @return Response|\Illuminate\Http\JsonResponse
     */
    public function create(array \$payload) {
    }

}
EOF;
	$file = fopen($path.$item."Service.php", "x");
	fwrite($file, $str);
	fclose($file);
}