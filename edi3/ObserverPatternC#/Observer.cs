using System; 

class TrainSignal 
{
    public Action TrainsAcoming;
    public void HereComesATrain() 
    {
        //there is a ton of logic here
        TrainsAcoming();
    }
}

class Car 
{
    public Car (TrainSignal trainSignal)
    {
        trainSignal.TrainsAcoming += StopTheCar; 
    }
    void StopTheCar()
    {
        Console.WriteLine("Screeeeeetch");
    }
}

class MainClass 
{

    static void Main() 
    {
        TrainSignal trainSignal = new TrainSignal();
        new Car (trainSignal);
        new Car (trainSignal); 
        new Car (trainSignal); 
        new Car (trainSignal); 
        trainSignal.HereComesATrain();

    }
}

