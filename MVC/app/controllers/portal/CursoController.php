<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{
    public function index(){
        return 'curso index';
    }

    public function show($request){
        $this->view([
            'title' => 'Curso',
            'curso' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel hic corporis maiores accusamus voluptas laboriosam nam optio delectus quas maxime, harum accusantium totam atque aperiam, pariatur cum impedit quisquam reprehenderit?'
        ], 'portal.cursos');
    }
}