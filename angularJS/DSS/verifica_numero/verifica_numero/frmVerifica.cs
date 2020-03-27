using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace verifica_numero
{
    public partial class frmVerifica : Form
    {
        public frmVerifica()
        {
            InitializeComponent();
        }

        private void btnVerifica_Click(object sender, EventArgs e)
        {
            double num = int.Parse(txtNum.Text);

            if(num % 2 == 0){

                MessageBox.Show("O número "+num+ " é par!");

            }else if(num % 2 != 0){

                MessageBox.Show("O número " + num + " é ímpar");

            }

        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnCancelar_Click(object sender, EventArgs e)
        {
            txtNum.Text = null;
        }

        private void txtNum_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
