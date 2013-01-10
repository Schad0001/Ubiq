<?php

namespace Test\Ubiq;

require_once( dirname( dirname( __DIR__ ) ) . '/Ubiq/Ubiq.php' );

class String_Test extends \PHPUnit_Framework_TestCase {



	// STARTS WITH
	public function test_starts_with__valid( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', 'Ubiq' );
		$this->assertTrue( $test );
	}

	public function test_starts_with__valid_sensitive( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', 'ubiq' );
		$this->assertFalse( $test );
	}

	public function test_starts_with__invalid( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', 'Java' );
		$this->assertFalse( $test );
	}

	public function test_starts_with__multiple_valid( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', [ 'Ubiq', 'Java' ] );
		$this->assertTrue( $test );
	}

	public function test_starts_with__multiple_valid_sensitive( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', [ 'ubiq', 'Java' ] );
		$this->assertFalse( $test );
	}

	public function test_starts_with__multiple_invalid( ) {
		$test = \UString\starts_with( 'Ubiq is so cool', [ 'Java', '.NET' ] );
		$this->assertFalse( $test );
	}



	// I STARTS WITH
	public function test_i_starts_with__valid( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', 'Ubiq' );
		$this->assertTrue( $test );
	}

	public function test_i_starts_with__valid_sensitive( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', 'ubiq' );
		$this->assertTrue( $test );
	}

	public function test_i_starts_with__invalid( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', 'Java' );
		$this->assertFalse( $test );
	}

	public function test_i_starts_with__multiple_valid( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', [ 'Ubiq', 'Java' ] );
		$this->assertTrue( $test );
	}

	public function test_i_starts_with__multiple_valid_sensitive( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', [ 'ubiq', 'Java' ] );
		$this->assertTrue( $test );
	}

	public function test_i_starts_with__multiple_invalid( ) {
		$test = \UString\i_starts_with( 'Ubiq is so cool', [ 'Java', '.NET' ] );
		$this->assertFalse( $test );
	}



	// MUST STARTS WITH
	public function test_must_starts_with__valid( ) {
		$assertion = 'www.example.com';
		\UString\must_starts_with( $assertion, 'http://' );
		$this->assertEquals( $assertion, 'http://www.example.com' );
	}

	public function test_must_starts_with__invalid( ) {
		$assertion = 'http://www.example.com';
		\UString\must_starts_with( $assertion, 'http://' );
		$this->assertEquals( $assertion, 'http://www.example.com' );
	}



	// MUST NOT STARTS WITH
	public function test_must_not_starts_with__valid( ) {
		$assertion = 'http://www.example.com';
		\UString\must_not_starts_with( $assertion, 'http://' );
		$this->assertEquals( $assertion, 'www.example.com' );
	}

	public function test_must_not_starts_with__invalid( ) {
		$assertion = 'www.example.com';
		\UString\must_not_starts_with( $assertion, 'http://' );
		$this->assertEquals( $assertion, 'www.example.com' );
	}



	// ENDS WITH
	public function test_ends_with__valid( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', 'cool' );
		$this->assertTrue( $test );
	}

	public function test_ends_with__valid_sensitive( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', 'Cool' );
		$this->assertFalse( $test );
	}

	public function test_ends_with__invalid( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', 'boring' );
		$this->assertFalse( $test );
	}

	public function test_ends_with__multiple_valid( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', [ 'cool', 'boring' ] );
		$this->assertTrue( $test );
	}

	public function test_ends_with__multiple_valid_sensitive( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', [ 'Cool', 'boring' ] );
		$this->assertFalse( $test );
	}

	public function test_ends_with__multiple_invalid( ) {
		$test = \UString\ends_with( 'Ubiq is so cool', [ 'boring', 'classy' ] );
		$this->assertFalse( $test );
	}



	// I ENDS WITH
	public function test_i_ends_with__valid( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', 'cool' );
		$this->assertTrue( $test );
	}

	public function test_i_ends_with__valid_sensitive( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', 'Cool' );
		$this->assertTrue( $test );
	}

	public function test_i_ends_with__invalid( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', 'boring' );
		$this->assertFalse( $test );
	}

	public function test_i_ends_with__multiple_valid( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', [ 'cool', 'boring' ] );
		$this->assertTrue( $test );
	}

	public function test_i_ends_with__multiple_valid_sensitive( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', [ 'Cool', 'boring' ] );
		$this->assertTrue( $test );
	}

	public function test_i_ends_with__multiple_invalid( ) {
		$test = \UString\i_ends_with( 'Ubiq is so cool', [ 'boring', 'classy' ] );
		$this->assertFalse( $test );
	}



	// MUST ENDS WITH
	public function test_must_ends_with__valid( ) {
		$assertion = 'http://www.example.com';
		\UString\must_ends_with( $assertion, '/' );
		$this->assertEquals( $assertion, 'http://www.example.com/' );
	}

	public function test_must_ends_with__invalid( ) {
		$assertion = 'http://www.example.com/';
		\UString\must_ends_with( $assertion, '/' );
		$this->assertEquals( $assertion, 'http://www.example.com/' );
	}



	// MUST NOT ENDS WITH
	public function test_must_not_ends_with__valid( ) {
		$assertion = 'http://www.example.com';
		\UString\must_not_ends_with( $assertion, '/' );
		$this->assertEquals( $assertion, 'http://www.example.com' );
	}

	public function test_must_not_ends_with__invalid( ) {
		$assertion = 'http://www.example.com/';
		\UString\must_not_ends_with( $assertion, '/' );
		$this->assertEquals( $assertion, 'http://www.example.com' );
	}



	// CONTAINS
	public function test_contains__valid( ) {
		$test = \UString\contains( '/path/to/a/folder', '/to/' );
		$this->assertTrue( $test );
	}

	public function test_contains__valid_sensitive( ) {
		$test = \UString\contains( '/path/to/a/folder', '/TO/' );
		$this->assertFalse( $test );
	}

	public function test_contains__invalid( ) {
		$test = \UString\contains( '/path/to/a/folder', '.' );
		$this->assertFalse( $test );
	}

	public function test_contains__multiple_valid( ) {
		$test = \UString\contains( '/path/to/a/folder', [ '/to/', '.' ] );
		$this->assertTrue( $test );
	}

	public function test_contains__multiple_valid_sensitive( ) {
		$test = \UString\contains( '/path/to/a/folder', [ '/TO/', '.' ] );
		$this->assertFalse( $test );
	}

	public function test_contains__multiple_invalid( ) {
		$test = \UString\contains( '/path/to/a/folder', [ 'php', '.' ] );
		$this->assertFalse( $test );
	}



	// I CONTAINS
	public function test_i_contains__valid( ) {
		$test = \UString\i_contains( '/path/to/a/folder', '/to/' );
		$this->assertTrue( $test );
	}

	public function test_i_contains__valid_sensitive( ) {
		$test = \UString\i_contains( '/path/to/a/folder', '/TO/' );
		$this->assertTrue( $test );
	}

	public function test_i_contains__invalid( ) {
		$test = \UString\i_contains( '/path/to/a/folder', '.' );
		$this->assertFalse( $test );
	}

	public function test_i_contains__multiple_valid( ) {
		$test = \UString\i_contains( '/path/to/a/folder', [ '/to/', '.' ] );
		$this->assertTrue( $test );
	}

	public function test_i_contains__multiple_valid_sensitive( ) {
		$test = \UString\i_contains( '/path/to/a/folder', [ '/TO/', '.' ] );
		$this->assertTrue( $test );
	}

	public function test_i_contains__multiple_invalid( ) {
		$test = \UString\i_contains( '/path/to/a/folder', [ 'php', '.' ] );
		$this->assertFalse( $test );
	}



	// CUT BEFORE
	public function test_cut_before__valid( ) {
		$path = 'example.com/my/path';
		$domain = \UString\cut_before( $path, '/' );
		$this->assertEquals( $path, '/my/path' );
		$this->assertEquals( $domain, 'example.com' );
	}
	public function test_cut_before__invalid( ) {
		$path = '/my/path';
		$domain = \UString\cut_before( $path, '/' );
		$this->assertEquals( $path, '/my/path' );
		$this->assertEquals( $domain, '' );
	}



	// SUBSTR BEFORE
	public function test_substr_before__valid( ) {
		$path = 'example.com/my/path';
		$domain = \UString\substr_before( $path, '/' );
		$this->assertEquals( $domain, 'example.com' );
	}
	public function test_substr_before__invalid( ) {
		$path = '/my/path';
		$domain = \UString\substr_before( $path, '/' );
		$this->assertEquals( $domain, '' );
	}


}