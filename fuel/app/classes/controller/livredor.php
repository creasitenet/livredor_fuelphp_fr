<?php
class Controller_Livredor extends Controller_Base {
   
    public function before() {
        parent::before(); 
    }
        
    public function after($response) {
        return parent::after($response);
    }

    // Accueil
    public function action_index() {  
       $comments = Model_Livredor::find('all', array(
       		'order_by' => array('created_at' => 'desc')
       ));     
	   $data['nb'] = count($comments);
	   $data['comments'] = $comments;
       $this->template->content = View::forge('livredor/index', $data);
    }

    // Commenter
    public function action_comment() {
        if (Input::method() == 'POST') {
            $pseudo = $_POST['pseudo'];
            $text = $_POST['text'];
            if ($text=='') {
                    $d['result'] = 0;
                    $d['message'] = "Votre commentaire ne peut pas être vide.";
            } else {  
                $e = Model_Livredor::forge(array(
                    'pseudo' => $pseudo,
                    'text' => $text,
                ));
                if ($e and $e->save()) {
					Session::set_flash('success_growl', e('Commentaire ajouté'));
                } else {
					Session::set_flash('error_growl', e("Impossible d'ajouter le commentaire"));
                }
				Response::redirect('/');                    
            }
        }  
        return json_encode($d);
    }

}