<?php

/* This file has useful database functions in it for the phone
 * project.
 */

// ListAllGames() - return an array of game objects
// USAGE: $gamelist = ListAllGames($dbh)
// $dbh is database handle
function ListAllGames($dbh)
{
    // fetch the data
    try {
        // set up query
        $game_query = "SELECT title FROM faqPage";
        // prepare to execute (this is a security precaution)
        $stmt = $dbh->prepare($game_query);
        // run query
        $stmt->execute();
        // get all the results from database into array of objects
        $gamedata = $stmt->fetchAll(PDO::FETCH_OBJ);
        // release the statement
        $stmt = null;

        return $gamedata;
    }
    catch(PDOException $e)
    {
        die ('PDO error in ListAllGames()": ' . $e->getMessage() );
    }
}


// ListMatchingGames() - return an array of game objects
// USAGE: $gamelist = ListAllGames($dbh, $name)
// $dbh is database handle, $name is what to search
function ListMatchingGames($dbh, $name)
{
    // fetch the data
    try {
        // Note use of ":name" in query as placeholder
        $game_query = "SELECT title FROM mytable " .
                       "WHERE  title like :name";
        // prepare to execute
        $stmt = $dbh->prepare($game_query);

        // bind $name to :name placeholder
        // Note use of "%" as wildcard, same as "*" for shell
        // or ".*" in sed/grep.
        $match = "%$name%";
        $stmt->bindParam('name', $match);

        $stmt->execute();
        $gamedata = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;

        return $gamedata;
    }
    catch(PDOException $e)
    {
        die ('PDO error in ListMatchingGames(): ' . $e->getMessage() );
    }
}

?>
