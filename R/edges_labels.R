

setwd("/Users/thegirlfriend/Sites/boostingecosystems/csv/master")

edges  <- read.csv("edges.csv")
places <- read.csv("lebanon/places.csv")
nodes  <- read.csv("nodes.csv")
 
studied_at <- subset(edges, edges$label =="studied at" )



studied_at_location <- merge(edges, places , by.x = "from" , by.y="nodeid")

studied_at_location <- subset(studied_at_location, studied_at_location$label.x == "studied at")

studied_at_location <- merge(studied_at_location, nodes, by.x = "to" , by.y = "nodeid")

colnames(studied_at_location)
nrow(studied_at_location)
View(studied_at_location)

write.csv( studied_at_location, file="lebanon/studied_at.csv")