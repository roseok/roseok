<?php
class user_model extends CI_Model {


    public function add_user($quote)
    {
        $query = "INSERT INTO login (first_name, job_titel, email,password,created_at,updated_at) VALUES (?,?,?,?,?,?)";
        $values = array($quote['text_First_Name'],$quote['text_Job_titel'],$quote['text_Email_Address'],$quote['text_Password'],date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
       $this->db->query($query, $values);
        return $this->db->insert_id();
    }


    public function add_event($quote)
    {
        $query = "INSERT INTO events (event_titel, event_discription,event_img) VALUES (?,?,?)";
        $values = array($quote['text_event_titel'],$quote['text_Event_discription'],$quote['text_Image_name']);
        $this->db->query($query, $values);
        return $this->db->insert_id();
    }

    public function add_youtube($quote)
    {
        $query = "INSERT INTO youtube (youtube_titel, youtube_link,youtube_discription) VALUES (?,?,?)";
        $values = array($quote['text_youtube_titel'],$quote['text_youtube'],$quote['text_youtube_discription']);
        $this->db->query($query, $values);
        return $this->db->insert_id();
    }


    public function updatepws($quote)
    {
        $data=array('password'=>$quote['text_Password']);
        $this->db->where('user_type','admin');
        $this->db->update('login',$data);
        return true;

    }


    public function get_post_withpws($quote)
    {
        $this->db->select();
        $this->db->from('login');

            $this->db->where(array('password'=>$quote['text_Password_old'] )  );

        $this->db->order_by('log_id','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }



     public function get_post($quote)
    {
        $this->db->select();
        $this->db->from('login');
        if(isset($quote['update'])){
            $this->db->where(array('email'=>$quote['text_Email_Address'] )  );
            $this->db->where(array('log_id !=' => $quote['log_id'] )  );
        }
        else
        {
        $this->db->where(array('email'=>$quote['text_Email_Address'] )  );
        if(isset($quote['log'])){
         $this->db->where(array('password'=>$quote['text_Password']  )  );
        }
        }
        $this->db->order_by('log_id','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }


    public function get_post_id($quote)
    {
        if (isset($quote['log_id']))
            $log_var=$quote['log_id'];
        else
        {
            $log_var =$quote;
        }
        $this->db->select();
        $this->db->from('login');
            $this->db->where(array('log_id' => $log_var )  );
        $this->db->order_by('log_id','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }


    public function get_all_post()
    {
        $this->db->select();
        $this->db->from('login');
        $this->db->order_by('log_id','desc');
        $query = $this->db->get();
        return $query->result();
    }


    public function update_post($log_id,$data)
    {
        $this->db->where('log_id',$log_id);
        $this->db->update('login',$data);
    }

public function delete_post($log_id)
    {
        $this->db->where('log_id',$log_id);
        $this->db->delete('login');
    }



    public function get_all_youtube()
    {
        $this->db->select();
        $this->db->from('youtube');
        $this->db->order_by('you_id','desc');
        $query = $this->db->get();
        return $query->result();
    }

}


?>