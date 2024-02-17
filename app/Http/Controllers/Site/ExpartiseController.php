<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpartiseController extends Controller
{
      /**
       * Display a company data Collection agency experties
       *
       * @return \Illuminate\Http\Response
       */
      public function agency()
      {
          return view('site.pages.experties.agency');
      }

      /**
       * Display a company capacity building experties
       *
       * @return \Illuminate\Http\Response
       */
      public function capacityBuilding()
      {
          return view('site.pages.experties.capacity_building');
      }

      /**
       * Display a company data management system experties
       *
       * @return \Illuminate\Http\Response
       */
      public function dbms()
      {
          return view('site.pages.experties.dbms');
      }

      /**
       * Display a company future projects experties
       *
       * @return \Illuminate\Http\Response
       */
      public function futureProjects()
      {
          return view('site.pages.experties.future_projects');
      }

      /**
       * Display a company monitoring evaluation experties
       *
       * @return \Illuminate\Http\Response
       */
      public function monitoring()
      {
          return view('site.pages.experties.monitoring_evaluation');
      }

      /**
       * Display a company project management experties
       *
       * @return \Illuminate\Http\Response
       */
      public function projmgt()
      {
          return view('site.pages.experties.project_management');
      }

      /**
       * Display a comapny research experties.
       *
       * @return \Illuminate\Http\Response
       */
      public function research()
      {
          return view('site.pages.experties.research_evaluation');
      }
}
