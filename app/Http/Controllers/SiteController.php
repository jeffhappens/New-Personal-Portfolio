<?php namespace App\Http\Controllers;

	use \App\Project;
	use \App\General;

	class SiteController extends Controller {

		public function index() {

			$data = [
				'general' => General::all(),
				'projects' => Project::all()
			];

			return view('site.index', $data);

		}

		public function postContact() {
			$input = \Input::all();
			$rules = [
				'name' => 'required',
				'email' => 'required|email',
				'message' => 'required'
			];
			$validator = \Validator::make($input, $rules);
			if($validator->fails()) {
				\Session::flash('error', \Config::get('strings.contactFormError'));
				return redirect('/');
			}
			\Session::flash('success', \Config::get('strings.contactFormSuccess'));
			return redirect('/');
		}

		public function project($id) {
			if(\Request::ajax()) {
				$project = Project::find($id);
				return $project->toArray();
			}
			// redirect to 404
			abort(404);
		}
	}

