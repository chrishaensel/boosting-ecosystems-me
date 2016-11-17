library(networkD3)

setwd("/Users/thegirlfriend/Sites/boostingecosystems/csv/master")


edges  <- read.csv("edges.csv")
places <- read.csv("lebanon/places.csv")
nodes  <- read.csv("nodes.csv")

place_edge <- merge(edges, places, by.x = "to" , by.y = "nodeid")

write.csv(place_edge , file="lebanon/edges_place.csv")
