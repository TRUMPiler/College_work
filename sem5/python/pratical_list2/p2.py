"""
class Node:
    def __init__(self, data):
      self.left = None
      self.right = None
      self.data = data
    def PrintTree(self):
      print(self.data)

root = Node(10)
root.PrintTree()
"""

a=input("enter any string")
if len(a)<=2:
    print("not enough length enter more characters")
        
else:
    print(a[0:2]+a[-2:])
    

    
    