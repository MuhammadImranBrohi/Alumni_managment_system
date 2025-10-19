<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
    
        $t_users = User::count();
        $t_alumni = User::count();
        $t_events = User::count();
        $t_departments = User::count();
        $users = User::all();

        return view('alumni_admin.index', compact( 't_users', 't_alumni','t_events', 't_departments','users')); }
    public function graduated() { return view('alumni_admin.graduated_alumni'); }
    public function viewEdit() { return view('alumni_admin.view_edit_alumni'); }
    public function addAlumni() { return view('alumni_admin.add_alumni'); }
    public function postNews() { return view('alumni_admin.post_news'); }
    public function publishEvents() { return view('alumni_admin.publish_events'); }
    public function viewAdmins() { return view('alumni_admin.view_admins'); }
    public function assignRoles() { return view('alumni_admin.assign_roles'); }
    public function createRoles() { return view('alumni_admin.create_roles'); }
    public function postJobs() { return view('alumni_admin.post_jobs'); }
    public function industryPosts() { return view('alumni_admin.industry_posts'); }
    public function trackParticipants() { return view('alumni_admin.track_participants'); }
    public function viewAllAlumni() { return view('alumni_admin.view_all_alumni'); }
    public function installationGuide() { return view('alumni_admin.installation_guide'); }    public function faq() { return view('alumni_admin.faq'); }
    public function license() { return view('alumni_admin.license'); }
}
// // Step 2: Controller Setup Strategy

// Tumhara system 4 major roles par based hai:

// AdminController – (Already present) — manages alumni, roles, events, etc.

// FacultyController – manages department activities, view students/alumni.

// RecruiterController – posts jobs, views alumni.

// StudentController – manages own profile, events, communication.