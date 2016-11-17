setwd("/Users/thegirlfriend/Sites/boostingecosystems/csv/master")

df <- read.csv("Lebanon/places.csv")



lebanon <- c("Liban" , "لبنان" , "Lebanon" , "Líbano" )

beirut <- c ("Beirut" , "محافظة بيروت" , "Gobernación de Beirut" , "Beirut Governorate" , "بيروت" , "Gouvernorat de Beyrouth")

mount_lebanon <- c("Gouvernorat du Mont-Liban" , "جبل لبنان" , "Mount Lebanon" , "Jabal Lubnan" , "Mount Lebanon Governorate")

df <- subset (df, df$longitude !="" & df$country %in%  lebanon )

write.csv(df, file="lebanon/places.csv")

unique(df$administrative_area_level_1)

colnames(df)

users <- read.csv("nodes.csv")

View(users)
View(df)


user_locations <- merge(df, users, by = "userid")

colnames(user_locations)

nrow(user_locations)

edges <- read.csv("edges.csv")
View(edges)

lables <- unique (edges$label)
View(lables)