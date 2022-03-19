<?php 

class Adventure {
    protected $clanok = [];

    public function getClanok()
	{
		return $this->clanok;
	}

	public function addClanok( Clanok $clanok )
	{
		array_push( $this->clanok, $clanok );
	}

	public function clanokCount()
	{
		return count( $this->clanok );
	}

	public function commentCount()
	{
		$count = 0;

		foreach ( $this->clanok as $clanok )
		{
			$count += $clanok->getComments();
		}

		return $count;
	}
}