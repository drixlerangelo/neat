# NEAT
## Neuroevolution of Augmenting Topologies

This is an implementation of NEAT introduced by Kenneth O. Stanley and Risto Miikulainen, see their paper [here](http://nn.cs.utexas.edu/downloads/papers/stanley.ec02.pdf). NEAT finds the optimal solution by constructing the neural network by altering its weights and topologies through evolutionary algorithms. This algorithm is based Complexification where these topologies start out as simple but gets more complex through succeeding generations.

This project is based on crAIg made by Joe Crozier and Nikolai Savas while they were attending YHack at Yale University. CrAIg is a self-teaching AI that uses NEAT to learn to play Super Mario Bros. The NEAT algorithm of crAIg is written in Lua and is located [here](https://github.com/joenot443/crAIg). To know more about crAIg and how they used NEAT on it, see their article [here](https://medium.com/@savas/craig-using-neural-networks-to-learn-mario-a76036b639ad).

This project is written in PHP but is planned to be written in Python as well.