Ethika Take Home Test Details

General Notes
Validation should happen on both sides, the client and the server.I don’t have any real experiences with scaling systems outside of working on the queries to make them more efficient and pagination

Frontend Notes
I was only able to mockup the most basics for the frontend. I was able to get the start of the foundation for the list the games, but was not able to test.I have put the api calls in the repository pattern. I would have a publisher screen that would have each publisher’s games. I would have filtering logic for games and publishes: filters like ratings, date created, and etc. I would still need to build pagination into the frontend lists, build a simple search for games and publishers, build admin section to handle adding and editing, games and publishers and user management .



Backend Notes
I was only able to get the first api call for getting a list of games.My next step would be to get some seeder logic built to add dummy test data for the database.Then would need to link the publishers to the games, then link ratings to games.Need to build a cronjob to calculate each game’s sum_rating. Need to build a cronjob to calculate each publisher’s rating from their game’s sum_rating
Provide for update the GamesService to pull all the relationships for games, as well as update the GamesRepository to support the GamesService
Then create the PublishersService and PublishersRepository to support the mention logic
And finally add pagination to list endpoints, add users and user management to system

