<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() { return view('alumni_admin.index'); }
    public function graduated() { return view('alumni_admin.graduated_alumni'); }
    public function viewEdit() { return view('alumni_admin.view_edit_alumni'); }
    public function addAlumni() { 
        return view('alumni_admin.add_alumni'); }

    public function postNews() { return view('alumni_admin.post_news'); }
    public function publishEvents() { return view('alumni_admin.publish_events'); }

    public function viewAdmins() { return view('alumni_admin.view_admins'); }
    public function assignRoles() { return view('alumni_admin.assign_roles'); }
    public function createRoles() { return view('alumni_admin.create_roles'); }

    public function postJobs() { return view('alumni_admin.post_jobs'); }
    public function industryPosts() { return view('alumni_admin.industry_posts'); }

    public function trackParticipants() { return view('alumni_admin.track_participants'); }
    public function viewAllAlumni() { return view('alumni_admin.view_all_alumni'); }

    public function installationGuide() { return view('alumni_admin.installation_guide'); }
    public function faq() { return view('alumni_admin.faq'); }
    public function license() { return view('alumni_admin.license'); }
}