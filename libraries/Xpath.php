<?php
    class Xpath {
        public $dom, $xpath;
        public function __construct($url=''){
            if(!empty($url)){ 
                $html = $this->_curl($url);
                $this->dom = new DOMDocument();
                @$this->dom->loadHTML($html);
                return $this->xpath =  new DOMXPath($this->dom);
            }
        }

        public function query($q){
            $result = $this->xpath->query($q);
            return $result;
        }

        public function preview($results){
            echo '<pre>';
            print_r($results);
            echo "<br> Node Values <br>";
            foreach($results as $result){
                echo trim($this->xpath->nodeValue) . '<br>';
                $array[] = $result;
            }
            return $array;
        }

        public function _deep_curl($url){

            $options = array(

                CURLOPT_HEADER         => false,        // don't return headers
                CURLOPT_ENCODING       => "",           // handle all encoding 
                CURLOPT_POST            => 1,            // i am sending post data
                CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
                CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
                CURLOPT_SSL_VERIFYPEER => false,        //
                CURLOPT_VERBOSE        => 1                //
            ); 


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: seller.snapdeal.com'));
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);
            curl_setopt_array($ch,$options); 


            $result = curl_exec($ch);

            // print_r($result);
            if(!$result){
                echo 'Curl error: ' . curl_errno($ch);
                exit;
            }
            curl_close($ch);

            /*   $result = strip_tags($result);
            $result = html_entity_decode($result);
            print($result);*/
            return $result;
        }

        public function _curl($url){
            //echo $url;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


            //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
            //curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            /* curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_PROXY, '127.0.0.1:9050');
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);*/


            $result = curl_exec($ch);
            // print_r($result);
            if(!$result){
                //echo $url;
                $msg['error'] =  'Curl error: ' . curl_errno($ch);
                echo json_encode($msg);
                exit;
            }
            /*   $result = strip_tags($result);
            $result = html_entity_decode($result);
            print($result);*/                           
            return $result;
        }

        function curl_exec_follow($ch, &$maxredirect = null) {

            // we emulate a browser here since some websites detect
            // us as a bot and don't let us do our job
            $user_agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5)".
            " Gecko/20041107 Firefox/1.0";
            curl_setopt($ch, CURLOPT_USERAGENT, $user_agent );

            $mr = $maxredirect === null ? 5 : intval($maxredirect);

            if (ini_get('open_basedir') == '' && ini_get('safe_mode') == 'Off') {

                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $mr > 0);
                curl_setopt($ch, CURLOPT_MAXREDIRS, $mr);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            } else {

                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

                if ($mr > 0)
                {
                    $original_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
                    $newurl = $original_url;

                    $rch = curl_copy_handle($ch);

                    curl_setopt($rch, CURLOPT_HEADER, true);
                    curl_setopt($rch, CURLOPT_NOBODY, true);
                    curl_setopt($rch, CURLOPT_FORBID_REUSE, false);
                    do
                    {
                        curl_setopt($rch, CURLOPT_URL, $newurl);
                        $header = curl_exec($rch);
                        if (curl_errno($rch)) {
                            $code = 0;
                        } else {
                            $code = curl_getinfo($rch, CURLINFO_HTTP_CODE);
                            if ($code == 301 || $code == 302) {
                                preg_match('/Location:(.*?)\n/', $header, $matches);
                                $newurl = trim(array_pop($matches));

                                // if no scheme is present then the new url is a
                                // relative path and thus needs some extra care
                                if(!preg_match("/^https?:/i", $newurl)){
                                    $newurl = $original_url . $newurl;
                                }   
                            } else {
                                $code = 0;
                            }
                        }
                    } while ($code && --$mr);

                    curl_close($rch);

                    if (!$mr)
                    {
                        if ($maxredirect === null)
                            trigger_error('Too many redirects.', E_USER_WARNING);
                        else
                            $maxredirect = 0;

                        return false;
                    }
                    curl_setopt($ch, CURLOPT_URL, $newurl);
                }
            }
            return curl_exec($ch);
        }
    }
?>