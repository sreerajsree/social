<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\Course;

class MicrosoftLearnModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locale = 'en-us';

        // $response = Http::get('https://docs.microsoft.com/api/contentbrowser/search?environment=prod&locale=es-es&facet=roles&facet=levels&facet=products&facet=resource_type&%24filter=((resource_type%20eq%20%27learning%20path%27))&%24orderBy=popularity%20desc%2Clast_modified%20desc%2Ctitle&%24top=30&showHidden=false');

        $response = Http::get('https://docs.microsoft.com/api/learn/catalog/?locale=' . $locale);
        // Spicified the data format to use
        $microsoft_courses = $response->json();

        foreach( $microsoft_courses['modules'] as $key => $ms_course){

            $level_id = 0;
            $type_id = 2;
            $current_user_id = 6;
            $platform_id = 1;
            $uid = $ms_course['uid'];

            // level of course
            switch($ms_course['levels'][0]){
                case('beginner'):
                    $level_id = 1;
                    break;
                case('intermediate'):
                    $level_id = 2;
                    break;
                case('advanced'):
                    $level_id = 3;
                    break;
                default:
                    $level_id = 1;
            }

            // // resource_type
            // switch($ms_course['resource_type']){
            //     case('learning path'):
            //         $type_id = 1;
            //         break;
            //     case('module'):
            //         $type_id = 2;
            //         break;
            //     default:
            //         $type_id = 1;
            // }

            $courses = Course::create([
                'title' => $ms_course['title'],
                'subtitle' => null,
                'summary' => $ms_course['summary'],
                'url' => $ms_course['url'],
                'duration_in_minutes' => $ms_course['duration_in_minutes'],
                'status' => 1,
                'slug' => Str::slug($ms_course['title']),
                'user_id' => $current_user_id,
                'level_id' => $level_id,
                'category_id' => 3,
                'price_id' => 1,
                'type_id' => $type_id,
                'modality_id' => 1,
            ]);

                // DB::table('course_user')->insert([
                //     'user_id' => 4,
                //     'course_id' => $courses->id
                // ]);

                //$uid = str_replace()

                $module_inserted = DB::table('sections')->insertGetId([
                    'name' => $ms_course['title'],
                    'course_id' => $courses->id,
                ]);

                $lessons = Http::get('https://docs.microsoft.com/api/hierarchy/modules/'. $uid . '?locale=' . $locale );

                foreach ($lessons['units'] as $lesson ){
                    $lesson_inserted = DB::table('lessons')->insertGetId([
                        'name' => $lesson['title'],
                        'url' => 'https://docs.microsoft.com/es-es' . $lesson['url'],
                        'iframe' => null,
                        //'iframe' => '<iframe src="https://docs.microsoft.com/es-es' . $unit['url'] . '"></iframe>',
                        'section_id'=> $module_inserted,
                        'platform_id' => $platform_id,
                    ]);

                    // $iten_id = $module['units'];

                    // $units = Http::get('https://docs.microsoft.com/api/hierarchy/modules?unitId='. $iten_id . '&locale=' . $locale);

                    // foreach( $sections['units'] as $unit ){
                    //     $lesson_inserted = DB::table('lessons')->insertGetId([
                    //         'name' => $unit['title'],
                    //         'url' => 'https://docs.microsoft.com/es-es' . $unit['url'],
                    //         'iframe' => null,
                    //         //'iframe' => '<iframe src="https://docs.microsoft.com/es-es' . $unit['url'] . '"></iframe>',
                    //         'section_id'=> $module_inserted,
                    //         'platform_id' => $platform_id,
                    //     ]);

                    //     // DB::table('descriptions')->insert([
                    //     //     'name' => $module['summary'],
                    //     //     'lesson_id' => $lesson_inserted
                    //     // ]);

                    // }

                }

            }

        }

}
