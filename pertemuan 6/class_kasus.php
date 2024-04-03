<?php
    class senar {
        protected $type;
        protected $senarl;

        protected function __construct($type, $senar) {
            $this->type = $type;
            $this->senar = $senar;
        }

        protected function getInfo() {
            echo "Jenis musik: " . $this->type . "<br>";
            echo "piano: " . $this->senar . "<br>";
        }
    }
    
    class piano extends senar {
        public $rangka;

        public function __construct($type, $senar, $rangka) {
            parent::__construct($type, $senar);
            $this->rangka = $rangka;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Jumlah senar: " . $this->rangka . "<br>";
        }
    }

    class drum extends senar {
        public $stick;

        public function __construct($type, $senar, $stick) {
            parent::__construct($type, $senar);
            $this->stick = $stick;
        }

        public function getInfo() {
            parent::getInfo();
            echo "besar ukuran: " . $this->stick . " meter<br>";
        }
    }

?><?php
    