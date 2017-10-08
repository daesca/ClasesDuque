<?php 
	namespace testsFramework;

	use PHPUnit\Framework\TestCase;
	use Framework\App;

class AppTests extends TestCase
{
	private $app = null;

	public function setUp(){
		$this->app = new App();
	}

	public function testInstanceApp(){

		$this->assertContainsOnlyInstancesOf(App::class, array($this->app));

	}

	public function testRunAppWelcomeMessage(){

		$response = $this->app->run();
		$this->assertEquals("Welcome to My Framework", $response);

	}

	public function testRunAppWelcomeMessageWithModule(){
		$this->app->setModule("Users");
		$response = $this->app->run();
		$this->assertEquals("Welcome to My Framework with Users module", $response);
	}
}