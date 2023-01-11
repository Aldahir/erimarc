<?php
    // include ('Conexao.php');
    //include ('Usuario.php');

    class cPonto {
        public $con;
        private $bloco;
        private $elemento;
        private $titulo;
        private $conteudo;
        private $estado;
        private $uid;

        function __construct($conexao)
        {
            $this->con = $conexao;
        }

        public function ler_todos(){
            try {
                $sql = $this->con->query("SELECT * FROM html_parts");
                $sql->execute();
                $res = $sql->fetchAll(5);
                return json_encode($res);
            } catch (PDOException $e) {
                die("Something went wrong! " . $e->getMessage());
            }
        }

        public function addClass($class=[], $part_id){
            try {
                //code...
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        public function render_page($headers=[], $script=[], $script_on_bottom=false, $lang='pt'){
           try{
            $html = "<!DOCTYPE html>\n<html lang=\"$lang\">\n";
        
            if( !empty( $headers ) ):
                foreach ( $headers as $key => $value ) :
                    $html .= "\t<head>\n";
                    $html .= "\t\t<{$headers[$key]}>{$headers[$key][$value]}</{$headers[$key]}>\n";
                    $html .= "\t</head>\n";
                endforeach;
            else:
                $html .= "\t<head>\n";
                $html .= "\t\t<meta charset=\"UTF-8\">\n";
                $html .= "\t\t<meta http-equiv=\"X-UA-Compatible' content='IE=edge\">\n";
                $html .= "\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
                $html .= "\t\t<title>" . htmlentities($this->getTitulo()) . "</title>\n";
            endif;

            if ($script_on_bottom == false) : 
                if( !empty( $script ) ):
                    foreach ( $script as $key => $value ):
                        $html .= "\t\t<script src=\"{$script[$key][$value]}\"></script>\n";
                    endforeach;
                endif;
            endif;

            $html .= "\t</head>\n";

            $html .= "\t<body>\n";
            $html .= "\t\t". $this->getConteudo() ."\n";
            $html .= "\t\t<img src=\"https://dummyimage.com/16:9x4048/cbf02a/fffff\" style=\"width:100%\" />\n";
            $html .= "\t</body>\n";

            if( $script_on_bottom == true ):
                foreach ( $script as $key => $value ):
                    $html .= "\t<script src=\"{$script[$key]}\"></script>\n";
                endforeach;
            endif;
            $html .= "</html>";

            return file_put_contents('../views/preview.html', $html) ? true : false;
            
           } catch(Throwable $tr){
            die("Something went wrong!<br>We're not able to render your html file<br>".$tr);
           }
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of conteudo
         */ 
        public function getConteudo()
        {
                return $this->conteudo;
        }

        /**
         * Set the value of conteudo
         *
         * @return  self
         */ 
        public function setConteudo($conteudo)
        {
                $this->conteudo = $conteudo;

                return $this;
        }
    }