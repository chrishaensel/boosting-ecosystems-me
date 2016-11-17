
setwd("/Users/thegirlfriend/Sites/boostingecosystems/csv/master")

edges  <- read.csv("edges.csv")
places <- read.csv("lebanon/places.csv")
nodes  <- read.csv("nodes.csv")

View(edges)
View(places)
View(nodes)

nrow(startups)

edges <- subset(edges, edges$label == "founded")

startups <- merge(edges, nodes, by.x = "to" , by.y = "nodeid"  )

write.csv (startups , file = "founded.csv")



startups_location <- merge(startups , places , by.x = "to" , by.y = "nodeid")

View(deduped.data)

write.csv (startups_location , file = "startups_location.csv")

cols <- c("label.y", "longitude" , "latitude")

tovis <- as.data.frame(startups_location [ ,  cols  ])

tovis <- unique(tovis)

deduped.data <- unique( tovis[ , 1:3 ] )

colnames(deduped.data) <- c("label", "longitude" , "latitude")
write.csv(deduped.data , file="startups.deduped.data.csv")


