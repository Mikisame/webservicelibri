using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Net.Http;
using System.IO;

namespace InterfacciaClient
{
    /// <summary>
    /// Logica di interazione per MainWindow.xaml
    /// </summary>

    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }
        string indirizzo;

        private void btnLoad_Click(object sender, RoutedEventArgs e)
        {
            indirizzo = txtURL.Text;
        }
        async static void GetRequest(string urlM)
        {
            using (HttpClient client = new HttpClient())
            {
                using (HttpResponseMessage response = await client.GetAsync(urlM))
                {
                    using (HttpContent content = response.Content)
                    {//possiamo usare HttpContentHeader headers = content.Headers;
                        string mycontent = await content.ReadAsStringAsync();
                        MessageBox.Show(mycontent);
                    }

                }

            }
        }

        private void btnUltimiArrivi_Click(object sender, RoutedEventArgs e)
        {
            string url = indirizzo + "?service=1";
            GetRequest(url);
        }
        private void btnScont_Click(object sender, RoutedEventArgs e)
        {
            string url = indirizzo + "?service=2";
            GetRequest(url);
        }

        private void btnArchiv_Click(object sender, RoutedEventArgs e)
        {
            string url = indirizzo + "?service=3";
            GetRequest(url);
        }

        private void btnAcquist_Click(object sender, RoutedEventArgs e)
        {
            string url = indirizzo + "?service=4";
            GetRequest(url);
        }


    }

