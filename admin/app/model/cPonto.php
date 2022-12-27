<?php
    include ('Conexao.php');

    class cPonto {
        public $con;
        private $bloco;
        private $elemento;

        function __construct()
        {
            $conexao = new Conexao();
            $this->con = $conexao->getConnection();
        }

        public function save(){
            try {
                $sql = $this->con->query("select * from html_parts");
                return $sql;
            } catch (\PDOException $e) {
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

        public function render_page($title, $headers=[], $content, $script=[], $script_on_bottom=false, $lang='pt'){
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
                $html .= "\t\t<title>" . htmlentities($title) . "</title>\n";
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
            $html .= "\t\t". $content ."\n";
            $html .= "\t</body>\n";

            if( $script_on_bottom == true ):
                foreach ( $script as $key => $value ):
                    $html .= "\t<script src=\"{$script[$key]}\"></script>\n";
                endforeach;
            endif;
            $html .= "</html>";

            file_put_contents('preview.html', $html);
            
           } catch(Throwable $tr){
            die("Something went wrong!<br>We're not able to render your html file");
           }
        }
    }