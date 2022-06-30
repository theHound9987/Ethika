#Ethika Take Home Test Details

##General Notes
Validation should happen on both sides client and server.

I don’t have any real experiences with scaling systems outside of work on the queries to make them more efficient and pagination.

###Frontend Notes
I was only able to mockup the most basics of the frontend. 

I was able to get the start foundation of the list the games was not able to test.

I have put the api calls in the repository pattern.

I would have a publisher screen that would have each publisher’s games.

I would have filtering logic for games and publishes: filters like ratings, date created, and etc.

Build pagination into the frontend lists.

Build a simple search for games and publishers.

Build admin section to handle adding and editing, games and publishers and user management.


###Backend Notes

I was only able to get the first api call for getting a list of games.

My next step would be to get some seeder logic built to add dummy test data for the database.

Link the publishers to the games.

Link ratings to games.

Build a cronjob to calculate each game’s sum_rating.

Build a cronjob to calculate each publisher’s rating from their game’s sum_rating.

Update the GamesService to pull all the relationships for games.

Update the GamesRepository to support the GamesService.

Create the PublishersService and PublishersRepository to support the mention logic.

Add pagination to list endpoints.

Add users and user management to system.
