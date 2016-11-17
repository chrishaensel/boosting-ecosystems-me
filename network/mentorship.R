library(networkD3)

setwd("/Users/thegirlfriend/Sites/boostingecosystems/csv/master")


edges  <- read.csv("edges.csv")
places <- read.csv("lebanon/places.csv")
nodes  <- read.csv("nodes.csv")

place_edge <- merge(edges, places, by.x = "to" , by.y = "nodeid")

place_edge <- subset(place_edge, place_edge$label.x == "mentored")
write.csv(place_edge , file="lebanon/edges_place.csv")

 
df <- place_edge
# Create fake data
src <- c("A", "A", "A", "A",
         "B", "B", "C", "C", "D")
target <- c("B", "C", "D", "J",
            "E", "F", "G", "H", "I")


networkData <- data.frame(df$from, df$to)

# Plot
simpleNetwork(networkData)