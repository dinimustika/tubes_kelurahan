<?php

namespace App\Controllers;
use App\Models\AktaModel;
use App\Models\KtpModel;
use App\Models\PenghasilanModel;
use App\Models\KematianModel;
use App\Models\CeraiModel;
use App\Models\SIMBModel;
use App\Models\SIUPModel;

class User extends BaseController
{
    public function __construct(){
        
    }
	public function index()
	{
        if (in_groups('pegawai')) :
            $db = \Config\Database::connect();
            $data['belum_selese'] = $db->query("CALL belum_selese()");
            $data['udah_selesai'] = $db->query("CALL udah_selesai()");
            $id = user_id();
            $data['alert'] = $db->query("CALL alert($id)");
            $data['jumlah'] = $db->query("CALL jumlah($id)");
            $data['alert_surat'] = $db->query("CALL alert_surat($id)");
            return view('surat/index', $data);
            else : 
                $db = \Config\Database::connect();
                $id = user_id();
                $data['alert'] = $db->query("CALL alert($id)");
                $data['jumlah'] = $db->query("CALL jumlah($id)");
                $data['alert_surat'] = $db->query("CALL alert_surat($id)");
                return view('surat/index',$data);
                
        endif;
	}
	public function riwayatKTP(){
		
		$data['title']='Data Riwayat Surat';
        $this->riwayat = new KtpModel();

        $db = \Config\Database::connect();

       if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_ktp.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatktp',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_ktp.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatktp',['data' => $data]);

	}
    public function riwayatAkta(){
        
        $data['title']='Data Riwayat Surat';
        $this->riwayat = new AktaModel();

        $db = \Config\Database::connect();

        if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_akta.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatakta',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_akta.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatakta',['data' => $data]);
        return view('surat/head',$data);
    }
    public function riwayatPenghasilan(){
        
        $data['title']='Data Riwayat Surat';

        $db = \Config\Database::connect();
        $data['title']='Data Riwayat Surat';
        $this->riwayat = new PenghasilanModel();

        $db = \Config\Database::connect();

        if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_penghasilan.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatpenghasilan',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_penghasilan.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatpenghasilan',['data' => $data]);
        return view('surat/head',$data);
    }
    public function selesai(){

        if (in_groups('pegawai')) :
             $db = \Config\Database::connect();
            $builder = $db->table('(SELECT COUNT(id_status) as stat from urus_akta WHERE id_status!=1 UNION ALL SELECT COUNT(id_status) as stat from urus_ktp WHERE id_status!=1 UNION ALL SELECT COUNT(id_status) as stat from urus_penghasilan WHERE id_status!=1)tbl');
            $builder ->select('SUM(tbl.stat) as mew');
            $query = $builder->get();
            $data['stats'] = $query->getResult();
            return view('user/admin', $data);
        endif;
    }
    public function profile($id){
        $data['title']='Data Warga';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getRow();
        return view('surat/profile',$data);
    }
    public function riwayatkematian(){
        
        $data['title']='Data Riwayat Surat';

        $db = \Config\Database::connect();
        $this->riwayat = new KematianModel();

        $db = \Config\Database::connect();

        if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_kematian.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatkematian',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_kematian.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatkematian',['data' => $data]);
        return view('surat/head',$data);
    }
    public function riwayatcerai(){
        
        $data['title']='Data Riwayat Surat';

        $db = \Config\Database::connect();
        $builder = $db->table('urus_cerai');
        $builder->select('*');
        $builder->join('users', 'users.id = urus_cerai.id_user');
        $builder->join('status', 'status.id_status = urus_cerai.id_status');
        $builder->join('surat', 'surat.id_surat = urus_cerai.id_surat');
        $builder->where('users.id', user_id());
        // $builder->where('users.id', $id);
        $query = $builder->get();

        if(in_groups('pegawai')) : 
            $builder = $db->table('urus_cerai');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_cerai.id_user');
            $builder->join('status', 'status.id_status = urus_cerai.id_status');
            $builder->join('surat', 'surat.id_surat = urus_cerai.id_surat');
            $query = $builder->get();
            $data['riwyt'] = $query->getResult();
            return view('surat/riwayatcerai',$data);
            return view('surat/head',$data);
        endif;

        $data['riwyt'] = $query->getResult();
        return view('surat/riwayatcerai',$data);
        return view('surat/head',$data);
    }
    public function riwayatberita(){
        $db = \Config\Database::connect();
        $builder = $db->table('berita');
        $builder->select('*');
        $builder->join('users', 'users.id = berita.id_user');
        $builder->join('auth_groups', 'auth_groups.id = berita.id_user');
        $query = $builder->get();
        $data['riwyt'] = $query->getResult();
        return view('surat/riwayatberita',$data);
        return view('template/index',$data);
        return view('surat/head',$data);
    }
    public function alerts(){
        $db = \Config\Database::connect();
        $id = user_id();
        if(in_groups('pegawai')) : 
            $data['akta'] = $db->query("SELECT * FROM urus_akta JOIN users on users.id = urus_akta.id_user JOIN status ON status.id_status=urus_akta.id_status JOIN surat on surat.id_surat=urus_akta.id_surat  GROUP by id_permohonan ASC LIMIT 5");
            $data['ktp'] = $db->query("SELECT * FROM urus_ktp JOIN users on users.id = urus_ktp.id_user JOIN status ON status.id_status=urus_ktp.id_status JOIN surat on surat.id_surat=urus_ktp.id_surat  GROUP by id_permohonan ASC LIMIT 5");
            return view('surat/gabung',$data);
        endif;
    }
    public function riwayatsimb(){
        
        $data['title']='Data Riwayat Surat';

        $db = \Config\Database::connect();
        $this->riwayat = new SIMBModel();

        $db = \Config\Database::connect();

        if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_simb.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatSIMB',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_simb.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatSIMB',['data' => $data]);
        return view('surat/head',$data);
    }
    public function riwayatsiup(){
        
        $data['title']='Data Riwayat Surat';

        $db = \Config\Database::connect();
        $this->riwayat = new SIUPModel();

        $db = \Config\Database::connect();

        if(in_groups('pegawai')) : 
            
            $data = [
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_siup.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
            ];
            return view('surat/riwayatSIUP',['data' => $data]);
            return view('surat/head',$data);
        endif;
        $data = [
            $id = user_id(),
            'riwyt' => $this->riwayat->where('id_user',$id),
            'riwyt' => $this->riwayat->join('status', 'status.id_status = urus_siup.id_status'),
            'riwyt' => $this->riwayat->paginate(5),
            'pager' => $this->riwayat->pager
        ];
        return view('surat/riwayatSIUP',['data' => $data]);
        return view('surat/head',$data);
    }
    public function riwayatevent(){
        $db = \Config\Database::connect();
        $builder = $db->table('event');
        $builder->select('*');
        $builder->join('users', 'users.id = event.id_user');
        $builder->join('auth_groups', 'auth_groups.id = event.id_user');
        $query = $builder->get();
        $data['riwyt'] = $query->getResult();
        return view('surat/riwayatevent',$data);
        return view('template/index',$data);
        return view('surat/head',$data);
    }
}
