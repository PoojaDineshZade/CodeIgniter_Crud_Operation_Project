<?php

class Crud extends CI_Controller
{
    public function index()
    {
        $data['product_details']=$this->Crud_model->getAllproducts();
        $this->load->view('Crud_view', $data);
        
    }
    public function  addProduct(){
       $this->form_validation->set_rules('name','Product Name','trim|required');
       $this->form_validation->set_rules('price','Product Price','trim|required');
       $this->form_validation->set_rules('quantity','Product Quantity','trim|required');

       if($this->form_validation->run() == false)
       {
        $data_error = [
            'error' => validation_errors()
        ];

       $this->session->set_flashdata($data_error);
    }
    else {
       $result= $this->Crud_model->insertProduct([
            'name' => $this->input->post('name'),
            'price'=> $this->input->post('price'),
            'quantity'=>$this->input->post('quantity')
        ]);

        if ($result){
            $this->session->set_flashdata('inserted', 'Your data has been successfully added!');
        }
    }
    redirect('crud');
}
public function editProduct($id){
    $data['singleProduct'] = $this->Crud_model->getsingleProduct($id);

    $this->load->view('edit_view',$data);
}

public function update($id)
{
    $this->form_validation->set_rules('name','Product Name','trim|required');
       $this->form_validation->set_rules('price','Product Price','trim|required');
       $this->form_validation->set_rules('quantity','Product Quantity','trim|required');

       if($this->form_validation->run() == false)
       {
        $data_error = [
            'error' => validation_errors()
        ];

       $this->session->set_flashdata($data_error);
    }
    else {
       $result= $this->Crud_model->updateProduct([
            'name' => $this->input->post('name'),
            'price'=> $this->input->post('price'),
            'quantity'=>$this->input->post('quantity')
        ],$id);

        if ($result){
            $this->session->set_flashdata('updated', 'Your data has been successfully updated!');
        }
    }
    redirect('crud');
}

public function deleteProduct($id){
    $result = $this->Crud_model->deleteitem($id);

    if($result == true)
    {
        $this->session->set_flashdata('deleted', 'Your data has been successfully deleted!');
    }
    redirect('crud');
}
}

?>