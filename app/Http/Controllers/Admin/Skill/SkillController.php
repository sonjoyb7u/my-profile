<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Exception;

class SkillController extends Controller
{
    public function index() {
        $data = Skill::get();
//        return $data;

        return view('admin.skill.index', compact('data'));
    }

    public function create() {
        $color_code = [
            'color_code_1', 'color_code_2', 'color_code_3', 'color_code_4', 'color_code_5', 'color_code_6', 'color_code_7', 'color_code_8', 'color_code_9', 'color_code_10',
        ];

        return view('admin.skill.create', compact('color_code'));
    }

    public function store(SkillRequest $request) {
//        return $request->except('_token');

        try {
            $data = [
                'skill_name' => $request->skill_name,
                'skill_percent' => $request->skill_percent,
                'skill_color_code' => $request->skill_color_code,
            ];
//            return $data;

            $data = Skill::create($data);
            if ($data) {
                showMessage('success', 'SUCCESS, Skill Has Been Added Successfully Done.');
                return redirect()->route('admin.skill.index');
            } else {
                showMessage('danger', 'ERROR, Skill Has Not Been Added!');
                return redirect()->route('admin.skill.create');
            }

        } catch (Exception $e) {
            showMessage('danger', 'ERROR, ' . $e->getMessage());
            return redirect()->back();
        }

    }

    public function edit($id) {
        $id = base64_decode($id);
        $data = Skill::find($id);
//        return $data;

        $color_code = [
            'color_code_1', 'color_code_2', 'color_code_3', 'color_code_4', 'color_code_5', 'color_code_6', 'color_code_7', 'color_code_8', 'color_code_9', 'color_code_10',
        ];

        return view('admin.skill.edit', compact('data', 'color_code'));
    }

    public function update(SkillRequest $request, $id) {
      $id = base64_decode($id);

      $skill = Skill::find($id);

      $skill_data = [
          $skill->skill_name = $request->skill_name,
          $skill->skill_percent = $request->skill_percent,
          $skill->skill_color_code = $request->skill_color_code,

      ];
//      return $skill_data;
        $skill_data = $skill->update($skill_data);
        if($skill_data) {
            showMessage('success', 'SUCCESS, Skill Has Been Updated Successfully Done.');
            return redirect()->route('admin.skill.index');

        } else {
            showMessage('danger','ERROR, Skill has not been Updated!');
            return redirect()->back();
        }


    }

    public function destroy($id) {
        $id = base64_decode($id);
//        return $id;
        $data = Skill::find($id);
        $delete_data = $data->delete();
        if($delete_data) {
            showMessage('success', 'Skill Has Been Deleted Successfully Done.');
            return redirect()->back();
        }

    }

    public function updateStatus($id, $status)
    {
//        return $id . ' ' . $status;

        $data = Skill::find($id);
        $data->status = $status;
        $data->save();

    }
}
