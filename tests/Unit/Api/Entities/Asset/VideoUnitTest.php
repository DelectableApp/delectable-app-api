<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:05
 */

namespace Tests\Unit\Api\Asset;

use App\Entities\Asset\Video;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class VideoUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_video_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'video_name' => 'Test_video_name',
            'video_length' => 21.23,
            'video_desc' => 'Test_video_desc',
            'video_isValid' => 0,
            'user_id' => 42,
            'image_id' => 42,
        ];


        $video = new Video($data);

        $this->assertInstanceOf(Video::class, $video);
        $this->assertEquals($data['video_name'], $video->video_name);
        $this->assertEquals($data['video_length'], $video->video_length);
        $this->assertEquals($data['video_desc'], $video->video_desc);
        $this->assertEquals($data['video_isValid'], $video->video_isValid);
        $this->assertEquals($data['user_id'], $video->user_id);
        $this->assertEquals($data['image_id'], $video->image_id);


        $results=$video;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }

}