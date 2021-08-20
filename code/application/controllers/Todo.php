<?php 

class Todo extends CI_Controller
{
    public function __construct()
    {    
        parent::__construct();
        $this->load->model("todo_model");
    }

    public function index()
    {
        
        $items = $this->todo_model->get_all();
        
        $viewData = array("todos" => $items);

        $this->load->view("todo_list", $viewData);
    }

    public function insert()
    {
        $todo_content = $this->input->post("todo_content");
        $todo_title = $this->input->post("todo_title");
        $insert = $this->todo_model->insert
        (
            array
            (
                "content"      =>$todo_content,
                "title"        =>$todo_title,
                "isCompleted"  =>0,
                "createdAt"    =>date("Y-m-d H:i:s")
            )
        );
        if($insert)
        {
            redirect(base_url());
        }
    }

    public function delete($id)
    {
        $delete = $this->todo_model->delete($id);
        redirect(base_url());
    }
    public function isCompletedSetter($id)
    {
        $completed = ($this->input->post("completed") == "true") ? 1: 0;
       
        $this->todo_model->update($id, array
        (
            "isCompleted" => $completed
        ));
    }


    public function updatePage($id)
    {
        $todo = $this
        ->db
        ->where("id", $id)
        ->get("todos")->row();
        
        $viewData = new stdClass();
        $viewData->todo = $todo;

        $this->load->view("kayitgüncelle", $viewData);
        
    }

    public function update($id)
    {
        $id = (int)$id;
        if($id < 1) exit(1);

        $todo_content = $this->input->post_get("content");
        $todo_title = $this->input->post_get("title");

        $data =  array
        (
            "content"      =>$todo_content,
            "title"        =>$todo_title
        );
        //die(json_encode($data));
        $update = $this->todo_model->update($id, $data);


        if($update)
        {
            redirect(base_url());
        }
    }

}
