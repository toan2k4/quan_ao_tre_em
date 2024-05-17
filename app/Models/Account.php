<?php
namespace App\Models;

class Account extends BaseModel
{
    protected $tableName = "tb_users";

    public function getUserClientByEmailAndPassword($email_tk, $mat_khau)
    {
        try {
            $sql = "SELECT 
                            tk.id, 
                            tk.user_name, 
                            tk.full_name, 
                            tk.password, 
                            tk.thumbnail, 
                            tk.email, 
                            tk.number_phone, 
                            tk.address, 
                            tk.role_id, 
                            tk.gender, 
                            pq.name 
                        FROM 
                            $this->tableName as tk 
                            JOIN 
                            tb_roles as pq
                            ON tk.role_id = pq.id  
                        WHERE 
                            email =? 
                            AND 
                            password =?  
                        LIMIT 1";
            $this->setQuery($sql);
            // debug($sql);
            return $this->loadRow([$email_tk, $mat_khau]);
        } catch (\Exception $e) {
            debug($e);
        }
    }


}