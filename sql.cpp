#include <string>
#include <iostream>
#include <map>
#define size 5
using namespace std;
struct queue{
	int array[size];
	int front=-1,rear=-1;
	void enque(int value)
	{
		if(rear!=size-1)
		{
			if(front==-1&&rear==-1)
			{
				front++;
				array[++rear]=value;
			}
			else{
				array[++rear]=value;
			}
		}
		else
		{
			cout<<"queue is full\n";
		}
	}
	void dequeue()
	{
		if(front !=-1&&rear!=-1&&front <=rear)
		{
			front++;
		}
		else{
			cout<<"queue is empty\n";
		}
	}
		int  peek()
	{
		if(front !=-1&&rear!=-1&&front <=rear)
		{
			return array[front];
		}
		else{
			cout<<"queue is empty\n";
			return -1;
		}
	}
		void display()
	{
		if(front !=-1&&rear!=-1&&front <=rear)
		{
			for(int i=front;i<=rear;i++)
			{
				cout<<array[i]<<"\t";
			}
		}
		else{
			cout<<"queue is empty\n";
		}
		cout<<endl;
	}
};
int main()
{
	queue ob;
	ob.enque(8);
		ob.enque(5);
			ob.enque(7);
				ob.enque(6);
					ob.display();
					ob.dequeue();
					ob.display();
					cout<<"the peek:"<<ob.peek()<<endl;
}