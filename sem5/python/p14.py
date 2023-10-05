#Write a Python program to find profit or loss based on cost price and sell price
#of an item. Also print profit or loss percentage. (Profit and loss must be
#positive number only)

cost=int(input("enter cost price "))
sell=int(input("ente selling price "))

if cost<0 and sell<0:
    print("both number should be positive")
else:
    sum=sell-cost
    if sum>0:
        per=(sum/cost)*100
        print("profit by ",per,"%")
    else:
        per=(sum/sell)*100
        print("loss by ",per,"%")